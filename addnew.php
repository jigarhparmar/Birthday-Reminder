

<html>
	<head>
		<title>Add New Event</title>
	</head>
	<?php include("header_main.php");?>
	<body>
<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
			<div id="LoginForm" class="loginMain" style="margin-top:10px;height:460px;">
				<div id="heading" class="heading">
						Add New Event
				</div>
				<div>
					<form action="addnew.php" method="POST">
					<br>
					<table>
						<tr>
							<select id="optionList" value="event" name="event" class="inputs" required="true"> 
								<option selected="selected">Birthday</option>
								<option value="Meeting">Meeting</option>
                                                                <option value="Note">Note</option>
								<option value="Anniversaty">anniversary</option>
							</select>
                                                </tr>
						<tr> 
							<input type="text" required="true" name="Name" class="inputs"placeholder="Name" /> 
						</tr>
						
						<tr> 
							<input type="date" required="true" name="Date" class="inputs" placeholder="Date " /> 
						</tr>
						<tr>
							<input type="time" required="true" name="Time" class="inputs" placeholder="Time " /> 
						</tr>
						<tr>
							<input type="text" required="true" name="Decs" class="inputs" placeholder="Enter The Description" />
						</tr>
						<tr>
						<input type="submit" name="submit" class="css_button" value="Continue"/>
						
						</tr>						
					</table>						
				</form>	
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
<?php include("footer.php");?>
<?php
    @session_start();
	
    
    extract($_POST); 
    extract($_SESSION);
    if(isset($username))
	{
    include("doConnection.php");
    if(isset($_REQUEST['submit']))
	{
            
	
	$event = $_POST['event'];
        
	$eName = $_POST['Name'];
	
	$eDate = $_POST['Date'];
	$eTime = $_POST['Time'];
	$eDecs= $_POST['Decs'];
        $eloginId=$loginId;
        $eemail=$email;
	
	
	$sql = "INSERT INTO rem (remTitle,remName,remDate,remTime,remDecs,loginId,email) VALUES ('$event','$eName','$eDate','$eTime','$eDecs',$loginId,'$eemail')";
	$result = mysql_query($sql);
		echo "alert('hi')";
        echo '<META http-equiv="refresh" content="0;URL=index.php">';
	
        }
	}
	else
	{
		echo '<META http-equiv="refresh" content="0;URL=index.php">';
	}
?>	