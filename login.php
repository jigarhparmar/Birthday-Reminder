
<html>
	<head>
		<title>Login Form</title>
	</head>
	<?php 
    require 'header_main.php';
?>
	<body>
	
<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
				<div id="LoginForm" class="loginMain">
			<div id="heading" class="heading">
				User Login
			</div>
				<div>
					<form action="login.php" method="POST">
						<br>
						<table>
							<tr>
								<div name=""
							</tr>
							<tr>
								<input type="text" name="username" required="true" class="inputs" placeholder="User Name" />
							</tr>
							<tr> 
								<input type="password" name ="pwd" equired="true" class="inputs"placeholder="Password" /> 
								<div id="msg" style="color:red; margin-top: -12px;"></div>
							</tr>
							<tr>
							<input type="submit" name="login" class="css_button" value="Login"/>
							</tr>
							<tr>
								<h5 style="color:#0C696E; margin-top:10px;" > <a style="color:#0C696E; " href="forgotpass.php">Forgot Password</a></h5>
								
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
	$flag=0;
        
	if(isset($_REQUEST['login']))
	{
		$username=$_REQUEST['username'];
		$password=$_REQUEST['pwd'];
                
		echo $username;
		if( $username == "" || $password == "") 
		{
			
		} 
		else 
		{
                    @session_start();
			$con=mysql_connect("localhost","root","");
			if(!$con)
			{
				die("could not connect".mysql_error());
			}
			$db_selected=mysql_select_db("reminder",$con);
			$sql="select * from login where username='$username' and password='$password'";
			$result=mysql_query($sql,$con);
			$numRow=mysql_num_rows($result);
			$row=mysql_fetch_row($result);
			if($numRow>0)
			{
				$flag=1;
				$email=$row[5];
                                
					if($row[1]==$username && $row[2]==$password && $row[4]=="user")
					{
						if($row[3]=="active")
						{
							
                                                        $_SESSION['username']=$username;
                                                        $_SESSION['loginId']=$row[0];
                                                        $_SESSION['user_role']=$row[4];
                                                        $_SESSION['email']=$email;
                                                        echo '<META http-equiv="refresh" content="0;URL=index.php">';
                                                        
                                                        break;
                                                        
						}
						else
						{
							
							?>
								<script type="text/javascript" language="javascript">
									document.getElementById('msg').innerHTML="Your account temporary locked, Please try after some Time.";
								</script>
							<?php
						}
					}
					else if($row[1]==$username && $row[2]==$password && $row[4]=="admin")
					{
						echo '<META http-equiv="refresh" content="0;URL=admin/admin_home.php">';
						$_SESSION['username']=$username;
                                                $_SESSION['loginId']=$row[0];
                                                $_SESSION['user_role']=$row[4];
                                                $_SESSION['email']=$row[5];
                                                break;
						
					}
				
			}
		}
		if($flag==0)
		{
				?>
								<script type="text/javascript" language="javascript">
									document.getElementById('msg').innerHTML="Invalid Username or password.";
								</script>
							<?php
			
		}
	}
	ob_flush();
	if(isset($_REQUEST['bregister']))
	{
		echo '<META http-equiv="refresh" content="0;URL=../registration.php">';
	}	
	
?>	