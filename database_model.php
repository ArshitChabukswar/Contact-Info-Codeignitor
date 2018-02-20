<?php

class database_model extends CI_Model{

public function register($user){
  $this->db->insert('intern', $user);
    
    $this->load->view("login.php");
}
public function login($email){
    
        $query = $this->db->query("SELECT user_password FROM Intern WHERE user_email = '$email'");
        
  
        return $query;
  }
  
function viewauction()
{
     
$query = $this->db->get('contacts');
    
return $query;
}



public function addcontact($user){
     $this->db->where('name',$user['name']);
   $q = $this->db->get('contacts');
  if ( $q->num_rows() > 0 ) 
   {
       $this->load->view('add.php');
     echo '<br><p style="text-align:center;font-size:30px;color:#FF0000;">There already exsits a record with same name.Try again!</p>'; 
   }  
  else{
      $this->db->insert('contacts', $user);
    $data2=$this->database_model->viewauction();
    $this->load->view("contacts.php");
    $template = array(
        'table_open'            => '<table border="5px"  style="margin: 0px auto; width:35%; text-align:center; background-color: 00C9FF;" cellpadding="4" cellspacing="0">',
        'thead_open'            => '<thead>',
        'thead_close'           => '</thead>',
        'heading_row_start'     => '<tr>',
        'heading_row_end'       => '</tr>',
        'heading_cell_start'    => '<th  style="text-align:center;">',
        'heading_cell_end'      => '</th>',
        'tbody_open'            => '<tbody style="background-color: #DBF6ED;">',
        'tbody_close'           => '</tbody>',
        'row_start'             => '<tr>',
        'row_end'               => '</tr>',
        'cell_start'            => '<td>',
        'cell_end'              => '</td>',
        'row_alt_start'         => '<tr>',
        'row_alt_end'           => '</tr>',
        'cell_alt_start'        => '<td>',
        'cell_alt_end'          => '</td>',
        'table_close'           => '</table>'
);
   $this->table->set_template($template);
   echo '<legend style="text-align:center;width:20%;margin:0px auto;font-size:40px;">Home</legend><br>';
 echo $this->table->generate($data2);
   
  }
}

public function removecontact($user){
    $this->db->where('name',$user['name']);
   $q = $this->db->get('contacts');
  if ( $q->num_rows() == 0 ) 
   {
       $this->load->view('remove.php');
     echo '<br><p style="text-align:center;font-size:30px;color:#FF0000;">No such record exists.Try again!</p>';
     
   }  
  else{
  $this->db->delete('contacts',$user);
    $data2=$this->database_model->viewauction();
    $this->load->view("contacts.php");
    $template = array(
        'table_open'            => '<table border="5px"  style="margin: 0px auto;width:35%; text-align:center; background-color: 00C9FF;" cellpadding="4" cellspacing="0">',
        'thead_open'            => '<thead>',
        'thead_close'           => '</thead>',
        'heading_row_start'     => '<tr>',
        'heading_row_end'       => '</tr>',
        'heading_cell_start'    => '<th  style="text-align:center;">',
        'heading_cell_end'      => '</th>',
        'tbody_open'            => '<tbody  style="background-color: #DBF6ED;">',
        'tbody_close'           => '</tbody>',
        'row_start'             => '<tr>',
        'row_end'               => '</tr>',
        'cell_start'            => '<td>',
        'cell_end'              => '</td>',
        'row_alt_start'         => '<tr>',
        'row_alt_end'           => '</tr>',
        'cell_alt_start'        => '<td>',
        'cell_alt_end'          => '</td>',
        'table_close'           => '</table>'
);
   $this->table->set_template($template); 
   echo '<legend style="text-align:center;width:20%;margin:0px auto;font-size:40px;">Home</legend><br>';
 echo $this->table->generate($data2);
}
}


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

}