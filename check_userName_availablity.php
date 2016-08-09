<?php
include("doConnection.php");
if($_REQUEST)
{
	$userName = $_REQUEST['userName'];
	$query = "select * from register where userName = '".strtolower($userName)."'";
	$results = mysql_query($query) or die('ok');
	
	if(mysql_num_rows(@$results) > 0) // not available
	{
		echo '<div id="Error">Already Taken</div>';
	}
	else
	{
		echo '<div id="Success">Available</div>';
	}
	
}
?>