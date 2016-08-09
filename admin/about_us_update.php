<?php
   include 'admin_header.php';
?>
<html>
    <title>
        
    </title>
    <head>
        <style type="text/css">
            .txtareac
            {
                width: 500px;
                height: 200px;
                
            }
            
            .mid
            {
                background-color: white;
                width: 80%;
                border-radius: 5px;
            }
            .heading2
            {
                font-size: 30px;
            }
            .lbl
            {
                font-size: 12px;
                font-weight: bold;
                margin-left: 50px;
                margin-right: 50px;
            }
        </style>
    </head>
    <body>
    <center>
        <div class="mid">
            
            <form method="post">
                <br>
                <div>
                    <label class="heading2"> Change The Content of About Us Page.</label>
                    <br>
                </div>
                <br>
                <br>
                <?php
                    include("../doConnection.php");
                    $query="select * from about_us";
                    $i=1;
                    if($rs=mysql_query($query,$con))
                    {
                        echo "<table border='1px'> ";
                            while($obj=mysql_fetch_row($rs))
                            {
                                
                                            echo "<tr><td><label class='lbl'>Peragraph'$i'</label></td><td><textarea name='a$i' class='txtareac'>","$obj[1]","</textarea></td>";		
                                            $i++;			
                            }
                        echo "</table>";
                    }

                ?>
                <br>
                <input type="reset" name="e_about_us_reset" value="Reset" id="menu" style="margin-left:20px"/>
                <input type="submit" name="e_about_us_update" value="Update" id="menu"/>

             </form>
            <br>
        <br>
        </div>
        
    </center>
        
    </body>
</html>
<?php
extract($_POST);
    if(isset($e_about_us_update))
    {
        if($con)
        {
                $query="truncate about_us;";
                if(mysql_query($query,$con))
                {
                        $query="insert into about_us values('peragraph','$a1')";
                        mysql_query($query,$con);
                        $query="insert into about_us values('peragraph','$a2')";
                        mysql_query($query,$con);
                        $query="insert into about_us values('peragraph','$a3')";
                        mysql_query($query,$con);
                
                    
                        echo "<script>
                        alert('Congratulations.. Updation Succesed');
                        </script>";
                }
                else
                {
                        echo "<script>alert('Error: Cant Not Update, Try Again');
                        </script>";

                }
?>
<script>
window.location="index.php";
</script>
<?php
								
		}
		else
			echo "<script>alert('Server May B Busy Please Try Again Later...');
			window.location='addnewuser.php';
			</script>";
				
		mysql_close($con);
	}
	
?>