<?php
    session_start();
    extract($_POST); 
    extract($_SESSION);
    if(isset($user_role))
    {
        if($user_role=="user")
        {
        echo '<META http-equiv="refresh" content="0;URL=../index.php">';
        }
    }
 else {
                echo '<META http-equiv="refresh" content="0;URL=../index.php">';
}
    
        
?>
<html>
    <head>
        <title>
            
        </title>
        <style type="text/css">
    h1{
	
	top:10px;
	left:10px;
	font-size:80px;
	color:#000;
	text-shadow:0px 0px 2px #fff;
	font-family:"Astloch", Arial, sans-serif;
	
}
img.mb_bgimage{
	position:fixed;
	left:0px;
	top:0px;
	width:100%;
	opacity:0.8;
}
/*.mb_overlay{
	width:100%;
	height:100%;
	
	top:0px;
	left:0px;
	background:transparent url(pattern.png) repeat top left;
	
}*/
   body 
   {
       width: 100%;
       height: 100%;
       background-image:url('admin.jpg');
       opacity: 0.8;
      
   }  
   #idmenu
   {
       margin-top: 0px;
       margin-left: 100px;
      
   }
   
    .amenu a
    {
        position: relative;
        background: #000;
        border: 5px;
        border-color: #ffffff;
        border-radius: 5px;
        height: 80px;
        width: 120px;
        text-align: center;
        margin-left: 1px;
        float: left;
        list-style: none;
        padding-top: 50px;
        color: #fff;
        
    }
    .amenu a:hover
    {
        background: #ffffff;
        color: #000;
       cursor: pointer;
    }
        </style>
    </head>
    <body>
        <form method="post">
            <div id="mb_pattern" class="mb_pattern">
                
                <div class="mb_overlay">
                    <!---->
                   
                       
                        <table width="100%">
                            <tr>
                                <td>
                                    <h1>Admin Panel</h1>
                                </td>
                                <td> 
                                    <div id="idmenu">
                                    <div class="amenu"> 
                            
                                        <a href="admin_home.php" >Home</a>
                                        <a href="addnewuser.php" >User Modify</a>
                                        <a href="about_us_update.php" >About Us</a>
                                        <a href="contact_us_update.php" >Contact Us</a>
                                        <a href="logout.php" >Logout</a>
                                    </div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                        
                    
                </div>
            </div>
          
        </form>
        
    </body>
</html>
