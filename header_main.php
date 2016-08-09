<?php
    session_start();
    extract($_POST); 
    extract($_SESSION);
    
    if(isset($user_role))
    {
        if($user_role=="user")
        {

            include 'header_reg.php';
        }
   
    }
    else 
    {
        include 'header.php';    
    }
?>