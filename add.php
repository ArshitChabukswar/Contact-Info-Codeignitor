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
                font-size: 30px;
            }
             .btn2{
                background-color: #FC8202;
                border-radius: 4px;
                width: 100%;
                height: 45px;
                
                font-size: 18px;
            }
           </style>
    </head>
    <body>
        
        
        
        
        <form role="form" method="post" action="<?php echo site_url('user/contactspage');?>" style="width: 20%; margin: 0 auto; padding-top: 100px;">
                          <fieldset>
                              <legend>Add Contact</legend>
                                 <div class="form-group">
                                     <input class="form-control" placeholder="Name" name="name" type="text" autofocus required>
                              </div>                 
                              <div class="form-group">
                                  <input class="form-control" placeholder="Contact Number" name="contact" type="tel" value="" required>
                              </div>
                              <div>
                              <input class="btn btn-lg btn-success btn-block" type="submit" value="ADD" name="login" >
                              </div>
                              <br>
                              <div>                                   
                                  <input style="color:#FFFFFF;" onclick="window.location='<?php echo site_url("user/home");?>'" class="btn2" type="button" value="HOME" name="home" >                             
                              </div>
                        </fieldset>  
        </form>
         
    </body>
</html>


