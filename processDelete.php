<?php
//include db configuration file
$con=mysql_connect("localhost","root","");
	mysql_select_db("reminder");

	
if(isset($_POST['rem_id'],$_POST['action'])){
		$rem_id=$_POST['rem_id'];
		$action=$_POST['action'];
		if ($action=='joined'){
			$query = "DELETE FROM rem where remId=$rem_id";
    	mysql_query($query);
			}
	}

?>