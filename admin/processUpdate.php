<?php
//include db configuration file
$con =mysql_connect("localhost","root","");
	if(!$con)
	{
		die("Can not open database".mysql_error());
	}
	mysql_select_db("reminder",$con);
function user_joined_update($user_id, $user_status, $user_role){
		//$user_id=mysql_real_escape_string(htmlentities($user_id));
		$query = "UPDATE register SET status='$user_status', user_role='$user_role' where regId=$user_id";
    mysql_query($query);
	
	echo $user_id;
	}
	
if(isset($_POST['user_id'],$_POST['user_status'],$_POST['user_role'],$_POST['action'])){
		$user_id=$_POST['user_id'];
		$user_status=$_POST['user_status'];
		$user_role=$_POST['user_role'];
		$action=$_POST['action'];
                
		if ($action=='joined'){
                        
			user_joined_update($user_id, $user_status, $user_role);
			}
	}

?>