<?php
	$con =mysql_connect("localhost","root","");
	if(!$con)
	{
		die("Can not open database".mysql_error());
	}
	$db=mysql_select_db("reminder",$con);
?>