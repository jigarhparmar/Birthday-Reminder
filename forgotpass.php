<?php
    include 'header.php';
?>
<html>
    <head>
        <title>
            Forgot Password
        </title>
    </head>
    <body>
        <div id="wrapper" >
            <div id="page" class="container">
                <div id="content">
                    <div id="LoginForm" class="loginMain">
			<div id="heading" class="heading">
				Forgot Password
			</div>
                        <div>
                                <form action="forgotpass.php" method="POST">
                                        <br>
                                        <table>
                                                <tr>
                                                <div id="d1"></div>
                                                </tr>
                                                <tr>
                                                        <input type="email" name="email" required="true" class="inputs" placeholder="E-Mail Address" />
                                                </tr>
                                                <tr>
                                                <input type="submit" name="send" class="css_button" value="Send"/>
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
<?php 
    $flag=0;
    if(isset($_REQUEST['send']))
    {
       
        $email=$_REQUEST['email'];
        $con=mysql_connect("localhost","root","");
        if(!$con)
        {
                die("could not connect".mysql_error());
        }
        $db_selected=mysql_select_db("reminder",$con);
        $sql="select * from register where eMail='$email'";
        $result=mysql_query($sql,$con);
	$numRow=mysql_num_rows($result);
	$row=mysql_fetch_row($result);
        if($numRow>0)
        {
                $flag=1;
                
                
        }
        if($flag==0)
        {
            ?>
                <script>
                    document.getElementById("d1").innerHTML="<html><body style=color: red>You have not any account in our site.</body></html>";
                </script>
            <?php
        }
    }
?>
<?php
    include 'footer.php';
?>