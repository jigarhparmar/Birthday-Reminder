<?php
//include db configuration file
$con=mysql_connect("localhost","root","");
	mysql_select_db("reminder");

	
if(isset($_POST['user_id'],$_POST['action'])){
		$user_id=$_POST['user_id'];
		$action=$_POST['action'];
		if ($action=='joined'){
			$query = "DELETE FROM register where regId=$user_id";
    	mysql_query($query);
			}
	}

?>