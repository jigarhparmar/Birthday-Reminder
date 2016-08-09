<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title></title>
	
	<link href="default.css" rel="stylesheet" type="text/css" media="all" />
	<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/logReg.css" rel="stylesheet" type="text/css" media="all" />
	
</head>
<body>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1><a href="#">Remindio</a></h1>
		</div>
		<div id="menu">
			<ul>
				<li class="icon icon-ok current_page_item"><a href="index.php">Home</a></li>
				<li class="icon icon-ok"><a href="hiw.php">How It Works</a></li>
				<li class="icon icon-ok"><a href="Addnew.php">Add New Reminder</a></li>
                                <li class="icon icon-ok"><a href="viewremind.php">view Reminder</a></li>
                                <li class="icon icon-ok"><a href="logout.php">Logout</a></li>
				
			</ul>
                        
                </div>
        <div id="user_name" style="margin-left:1090px; margin-top: 20px; color:#FFF;">
                
                <?php
                 echo "Welcome " .$username;
                ?>
               
            </div>
                  
</div>
           
</body>
</html>