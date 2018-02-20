<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" media="screen" title="no title">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
           body{ background-image: linear-gradient(to right, #eea2a2 0%, #bbc1bf 19%, #57c6e1 42%, #b49fda 79%, #7ac5d8 100%);
        }
        legend {
                text-align: center;
                font-size: 50px;
            }
           </style>
    </head>
    <body>
        <?php
                  $error_msg=$this->session->flashdata('error_msg');
                  if($error_msg){
                    echo $error_msg;
                  }
           ?>
        
        
        
        <form role="form" method="post" action="<?php echo site_url('user/login');?>" style="width: 20%; margin: 0 auto; padding-top: 100px;">
                          <fieldset>
                              <legend>Login</legend>
                                 <div class="form-group">
                                     <input class="form-control" placeholder="E-mail" name="user_email" type="email" autofocus required>
                              </div>                 
                              <div class="form-group">
                                  <input class="form-control" placeholder="Password" name="user_password" type="password" value="">
                              </div>                                                        
                              <input class="btn btn-lg btn-success btn-block" type="submit" value="Login" name="login" >
                              <div>
                                  <h3>
                                      <a style='margin: 0 auto;' href="<?php echo site_url('user/index');?>" >Not a registered user?</a>
                                  </h3>
                              </div>
                        </fieldset>  
        </form>
         
    </body>
</html>

