<!DOCTYPE html>
<html>
    <head>
        <title>Registration Page</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" media="screen" title="no title">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body{
                 background-image: linear-gradient(to right, #eea2a2 0%, #bbc1bf 19%, #57c6e1 42%, #b49fda 79%, #7ac5d8 100%);
                font-size: 20px;
                text-align: center;
            }
            div{
                padding-top: 100px;
            }
            button{
                width: 15%;
            }
            .logout{
                background-color: #f44336;
                border-radius: 4px;
                width: 30%;
                height: 45px;
            }
        </style>
    </head>
    <body>
        
        <div>
            <button type="button" class="btn btn-success" onclick="window.location='<?php echo site_url("user/addcontactspage");?>'">Add Contact</button>
       <button type="button" class="btn btn-success" onclick="window.location='<?php echo site_url("user/removecontactspage");?>'">Remove Contact</button>
        </div>      
        <div>
            <input style="color:#FFFFFF;" onclick="window.location='<?php echo site_url("user/logout");?>'" class="logout" type="button" value="LOGOUT" name="logout" >
        </div>
    </body>
