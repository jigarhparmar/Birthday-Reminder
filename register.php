
<html>
	<head>
		<title>Registration From</title>
		<?php include("header.php");?>
                 
                <style type="text/css">
                    #Error{
                            background-image:url(images/no.jpg);
                            background-repeat:no-repeat;
                            background-position:left; 
                            color:#FF0000; 
                            padding-left:33px; 
                            height:19px; 
                            padding-top:6px;
                            padding-right:10px;
                            }
                    #Success{
                            background-image:url(images/yes.jpg);
                            background-repeat:no-repeat;
                            background-position:left; 
                            color:#669933; 
                            padding-left:33px; 
                            height:19px; 
                            padding-top:6px;
                            padding-right:10px;
                    }

/* CSS Document */


                </style>
				<script type="text/javascript">
					function validation(){
						/*var fullName=document.getElementById("fullName").value;
						var patt=/\W/g;
						if(fullName=="" || fullName.match(patt))
						{
							if(fullName=="")
							{
								document.getElementById("fError").innerHTML="Enter Name !!!";
								document.getElementById("fullName").focus();
								return false;
							}
							else
							{
								document.getElementById("fError").innerHTML="No use special charecter!!!";	
								document.getElementById("fullName").focus();
								return false;
							}
						}
						else
						{
							document.getElementById("fError").innerHTML="";
						}*/
						alert("Hi");
					}
                </script>
               
	</head>
	<body>
<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
			<div id="register" class="loginMain" style="margin-top:10px;height:615px;">
		<div id="heading" class="heading">
				Registration
		</div>
			<div>
				<form action="doRegister.php" method="POST" onSubmit="return validation();">
					<br>
					<table>
						<tr>
							<input type="text" id="fullName" name="fullName" required="true" class="inputs" placeholder="Full Name" " /><div id="fError"></div>
							
						</tr>
						<tr> 
                                                <input type="text" required="true" id="userName" name="userName" class="inputs" placeholder="User Name" onBlur="return check_userName();"/> 
                                                <div id="Info"></div>
                                               <!-- <span id="Loading" ><img src="images/loader.gif"/> </span>-->
             					</tr>
						<tr>
							<input type="email" name="eMail" required="true" class="inputs" placeholder="e-mail" />
						</tr>
						<tr> 
							<input type="password" name="password" required="true" class="inputs"placeholder="Password" /> 
						</tr>
						<tr> 
							<input type="password" name="rePassword" required="true" class="inputs"placeholder="Retype Password" /> 
						</tr>
						<tr> 
							<input type="text" required="true" name="mobileNo" class="inputs" placeholder="Mobile Number" /> 
						</tr>
						<tr>
							<select id="optionList" value="Gender" name="gender" class="inputs" required="true"> 
								<option selected="selected">Male</option>
								<option value="passenger1">Female</option>
								<option value="passenger2">Other</option>
							</select>
						</tr>
						<tr>
							<input type="date" required="true" name="DOB" class="inputs" placeholder="Birth Date" />
						</tr>
						<tr>
						<input type="submit" class="css_button" value="Registration" name="submit"/>
						<input type="reset" class="css_button" value="Reset"/>
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
