<?php
    @session_start();
    extract($_POST); 
    extract($_SESSION);
    
    if(isset($user_role))
    {
        session_destroy();
    echo '<META http-equiv="refresh" content="0;URL=../index.php">';
    }
    $_SESSION['user_role']="temp";
?>