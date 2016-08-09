<?php
//include db configuration file
$con =mysql_connect("localhost","root","");
	if(!$con)
	{
		die("Can not open database".mysql_error());
	}
	mysql_select_db("reminder",$con);
function user_joined_update($rem_id, $rem_title, $rem_name,$rem_date,$rem_time,$rem_desc){
		//$user_id=mysql_real_escape_string(htmlentities($user_id));
		$query = "UPDATE rem SET remTitle='$rem_title', remName='$rem_name' ,remDate='$rem_date',remTime='$rem_time',remDecs='$rem_desc' where remId=$rem_id";
    mysql_query($query);
	
	echo $rem_id;
}
	
if(isset($_POST['rem_id'],$_POST['rem_title'],$_POST['rem_name'],$_POST['rem_date'],$_POST['rem_time'],$_POST['rem_desc'],$_POST['action'])){
		$rem_id=$_POST['rem_id'];
		$rem_title=$_POST['rem_title'];
		$rem_name=$_POST['rem_name'];
                $rem_date=$_POST['rem_date'];
                $rem_time=$_POST['rem_time'];
                $rem_desc=$_POST['rem_desc'];
		$action=$_POST['action'];
                
		if ($action=='joined'){
                        
			user_joined_update($rem_id, $rem_title, $rem_name,$rem_date,$rem_time,$rem_desc);
			}
	}

?>