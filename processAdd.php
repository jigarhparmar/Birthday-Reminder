<?php
$con =mysql_connect("localhost","root","");
	if(!$con)
	{
		die("Can not open database".mysql_error());
	}
	$db=mysql_select_db("reminder",$con);
function user_joined_add($user_fname, $user_uname,$user_email,$user_pass,$user_repass,$user_mob,$user_gen,$newDate,$user_status,$user_role){
		$query = "INSERT INTO register (fullName,userName,eMail,password,rePassword,mobileNo,gender,DOB,staus,user_role) VALUES 
            ('".$user_fname."','".$user_uname."','".$user_email."','".$user_pass."','".$user_repass."','".$user_mob."','".$user_gen."','".$newDate."','".$user_status."','".$user_role."')";
    
                mysql_query($query);
	
	echo $user_fname;
	}
if(isset($_POST['user_fname'],$_POST['user_uname'],$_POST['user_email'],$_POST['user_pass'],$_POST['user_repass'],
        $_POST['user_mob'],$_POST['user_gen'],$_POST['user_dob'],$_POST['user_status'],$_POST['user_role'],$_POST['action'])){
		
		$user_fname=$_POST['user_fname'];
		$user_uname=$_POST['user_uname'];
                $user_email=$_POST['user_email'];
		$user_pass=$_POST['user_pass'];
                $user_repass=$_POST['user_repass'];
		$user_mob=$_POST['user_mob'];
                $user_gen=$_POST['user_gen'];
		$user_dob=$_POST['user_dob'];
                $user_status=$_POST['user_status'];
		$user_role=$_POST['user_role'];
		$action=$_POST['action'];
                
                $newDate = date("Y-m-d", strtotime($user_dob));
               		if ($action=='joined'){
			user_joined_add($user_fname, $user_uname,$user_email,$user_pass,$user_repass,$user_mob,$user_gen,$newDate,$user_status,$user_role);
			}
	}

?>