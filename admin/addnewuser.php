<?php
    require 'admin_header.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <style type="text/css">
        .mid
        {
            background-color: white;
            width: 80%;
            border-radius: 5px;
        }
        
    </style>
</head>
<link href="css/jquery-ui-1.10.0.custom.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"/>
<link rel="stylesheet" href="css/bootstrap-responsive.css" type="text/css"/>
<link rel="stylesheet" href="css/bootstrap.css" type="text/css"/>
<link rel="stylesheet" href="css/jquery.qtip.min.css" type="text/css"/>
<script src="js/jquery-1.8.3.min.js"></script>
<script src="js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="js/jquery.qtip.min.js"></script>
<script src="js/myjquery.js"></script>

<body>
    
<center>
    <div class="mid">
            
<form action='index.php' method='post' class="form-inline">

    
<!--//////////////////////////////////// Edit Dialog ///////////////////////////////////////-->

    <div id="edit_dialog" title="Update User Information" >
        <div class="control-group">
            <div>User ID :</div>
            <div>
                <input title="No permission to edit." type="text" name="id1" id="id1"/>
            </div>
        </div>
        
        <div class="control-group">
                <label class="control-label">Status :</label>
            <div class="controls">
                <input type="text" name="status1" id="status1"></input>
            </div>
        </div>
        <div class="control-group">
                <label class="control-label">User Role :</label>
            <div class="controls">
                <input type="text" name="role1" id="role1"></input>
            </div>
        </div>

    </div>
	
<!--//////////////////////////////////// Delete Dialog ///////////////////////////////////////-->

    <div id="delete_dialog" title="Delete User Information">
        <div class="control-group">
                    <label class="control-label">Are you sure want to delete this record?</label>
                <div class="controls">
                    <input type="hidden" name="id3" id="id3"/>
                </div>
        </div>
            
    </div>

<!--////////////////////////////////// Checking Fill Dialog ///////////////////////////////////-->

<div id="d2" title="Checking Empty..." style="display:none;">
	<p>Please do not empty....!</p>
</div>

<?php

	$con=mysql_connect("localhost","root","");
	mysql_select_db("reminder");
	$sql="select * from register order by regId";
	echo "<br><br><table border=1 style='width:1000px;' class='user table table-bordered'>";
	echo "<tr>";
	
	echo "<th>Register Id</th><th>Full Name</th><th>User Name</th><th>Email Address</th><th>Mobile Number</th><th>Gender</th><th>DOB</th><th>Status</th><th>User Role</th><th>Edit</th><th>Delete</th>";
	echo "</tr>";
	$result=mysql_query($sql);
	while($row=mysql_fetch_assoc($result))
	{	
		$id=$row['regId'];
		echo "<tr class='user' id=".$row['regId'].">";
		echo "<td style='text-align:center;'>".$row['regId']."</td>";
		echo "<td>".$row['fullName']."</td>";
		echo "<td style='text-align:center;'>".$row['userName']."</td>";
		echo "<td style='text-align:center;'>".$row['eMail']."</td>";
                echo "<td style='text-align:center;'>".$row['mobileNo']."</td>";
                echo "<td style='text-align:center;'>".$row['gender']."</td>";
                echo "<td style='text-align:center;'>".$row['DOB']."</td>";
                echo "<td class='status' style='text-align:center;'>".$row['status']."</td>";
                echo "<td class='role' style='text-align:center;'>".$row['user_role']."</td>";
		echo "<td><a class='edit' href='#'><img src='edit.jpg' height=20 width=20/></a></td>";
		
		echo "<td><a href='#' class='delete'><img src='Delete.png' height=20 width=20/></a></td>";
		echo "</tr>";
		
	}
	echo "</table>";
	
	mysql_close($con);

?>
</form>
        <br></br>
</div>
    
</center>
</body>