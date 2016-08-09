<?php
	include("doConnection.php");
	
	$fullName = $_POST['fullName'];
	$userName = $_POST['userName'];
	$eMail = $_POST['eMail'];
	$password = $_POST['password'];
	$rePassword = $_POST['rePassword'];
	$mobileNo = $_POST['mobileNo'];
	$gender = $_POST['gender'];
	$DOB = $_POST['DOB'];
	$newDate = date("Y-m-d", strtotime($DOB));
        echo $newDate;
	$status="active";
        $user_role="user";
	
	$sql = "INSERT INTO register (fullName,userName,eMail,password,rePassword,mobileNo,gender,DOB,status,user_role) VALUES ('$fullName','$userName','$eMail','$password','$rePassword','$mobileNo','$gender','$newDate','$status','$user_role')";
	$result = mysql_query($sql);
	$sqlin = "INSERT INTO login (userName,password,status,user_role,email) VALUES ('$userName','$password','$status','$user_role','$eMail')";
	$result = mysql_query($sqlin);
	echo $result;
	
	echo '<META http-equiv="refresh" content="0;URL=index.php">';
	
	
	
?>