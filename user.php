<?php

class user extends CI_Controller {

public function __construct(){

        parent::__construct();
  			$this->load->helper('url');
  	 		$this->load->model('database_model');                       
                        $this->load->library('session');
                        $this->load->library('table');

}

public function index()
{
$this->load->view("register.php");
}


public function register(){
    $user=array(
      'user_name'=>$this->input->post('user_name'),
      'user_password'=>md5($this->input->post('user_password')),
      'user_email'=>$this->input->post('user_email'),      
      'user_age'=>$this->input->post('user_age'),
      'user_mobile'=>$this->input->post('user_mobile')
        );
       
        $this->database_model->register($user);
}

public function login(){

 $login_user=array(

  'user_email'=>$this->input->post('user_email'),
   'user_password'=>md5($this->input->post('user_password'))

    );
 $data=$this->database_model->login($login_user['user_email']);
 $row=$data->row();
 $check=$row->user_password;
 if($check==$login_user['user_password']){
     
     $this->load->view('contacts.php');
      $data2=$this->database_model->viewauction();
      $template = array(
        'table_open'            => '<table border="5px"  style="margin: 0px auto;width:35%;text-align:center;background-color: 00C9FF; border-radius:4px;overflow:auto;" cellpadding="10px" cellspacing="10px">',
        'thead_open'            => '<thead >',
        'thead_close'           => '</thead >',
        'heading_row_start'     => '<tr >',
        'heading_row_end'       => '</tr >',
        'heading_cell_start'    => '<th style="text-align:center;">',
        'heading_cell_end'      => '</th >',
        'tbody_open'            => '<tbody style="background-color: #DBF6ED;" >',
        'tbody_close'           => '</tbody>',
        'row_start'             => '<tr >',
        'row_end'               => '</tr >',
        'cell_start'            => '<td >',
        'cell_end'              => '</td >',
        'row_alt_start'         => '<tr >',
        'row_alt_end'           => '</tr >',
        'cell_alt_start'        => '<td>',
        'cell_alt_end'          => '</td >',
        'table_close'           => '</table >'
);
   $this->table->set_template($template);
   echo '<legend style="text-align:center;width:20%;margin:0px auto;font-size:40px;">Home</legend><br>';
 echo $this->table->generate($data2);
 
 }
 else{
     
    $this->load->view("login.php");
    echo '<br><p style="text-align:center;font-size:25px;color:#FF0000;">Incorrect Email or Password</p>';
 }
 
  }

public function login_page(){
    $this->load->view("login.php");
           
}

public function viewcontacts(){
    $data2=$this->database_model->viewauction();
    $this->load->view('contacts.php');
     $template = array(
        'table_open'            => '<table border="5px"  style="margin: 0px auto;width:35%;text-align:center;background-color: 00C9FF;" cellpadding="10px" cellspacing="10px">',
        'thead_open'            => '<thead >',
        'thead_close'           => '</thead >',
        'heading_row_start'     => '<tr >',
        'heading_row_end'       => '</tr >',
        'heading_cell_start'    => '<th style="text-align:center;">',
        'heading_cell_end'      => '</th >',
        'tbody_open'            => '<tbody style="background-color: #DBF6ED;" >',
        'tbody_close'           => '</tbody>',
        'row_start'             => '<tr ">',
        'row_end'               => '</tr >',
        'cell_start'            => '<td >',
        'cell_end'              => '</td >',
        'row_alt_start'         => '<tr >',
        'row_alt_end'           => '</tr >',
        'cell_alt_start'        => '<td>',
        'cell_alt_end'          => '</td >',
        'table_close'           => '</table >'
);
   $this->table->set_template($template);
   echo '<legend style="text-align:center;width:20%;margin:0px auto;font-size:40px;">Home</legend><br>';
 echo $this->table->generate($data2);
}


public function addcontactspage(){
    $this->load->view('add.php');
}
public function contactspage(){
      $user=array(
      'name'=>$this->input->post('name'),
      'contact'=>$this->input->post('contact')      
        );
     $this->database_model->addcontact($user); 
        
}

public function deletecontact(){
   $user=array(
      'name'=>$this->input->post('name')
);
$this->database_model->removecontact($user);
}





public function removecontactspage(){
    $this->load->view('remove.php');
}

public function home(){
   $this->load->view('contacts.php');
      $data2=$this->database_model->viewauction();
      $template = array(
        'table_open'            => '<table border="5px"  style="margin: 0px auto;width:35%;text-align:center;background-color: 00C9FF; border-radius:4px;" cellpadding="10px" cellspacing="10px">',
        'thead_open'            => '<thead >',
        'thead_close'           => '</thead >',
        'heading_row_start'     => '<tr >',
        'heading_row_end'       => '</tr >',
        'heading_cell_start'    => '<th style="text-align:center;">',
        'heading_cell_end'      => '</th >',
        'tbody_open'            => '<tbody style="background-color: #DBF6ED">',
        'tbody_close'           => '</tbody>',
        'row_start'             => '<tr >',
        'row_end'               => '</tr >',
        'cell_start'            => '<td >',
        'cell_end'              => '</td >',
        'row_alt_start'         => '<tr >',
        'row_alt_end'           => '</tr >',
        'cell_alt_start'        => '<td>',
        'cell_alt_end'          => '</td >',
        'table_close'           => '</table >'
);
   $this->table->set_template($template);
   echo '<legend style="text-align:center;width:20%;margin:0px auto;font-size:40px;">Home</legend><br>';
 echo $this->table->generate($data2); 
}

public function logout(){
    $this->load->view('login.php');
}

}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

