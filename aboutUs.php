<title>About Us</title>
<?php
    include 'header_main.php';
?>

<div id="wrapper">
	<div id="page" class="container">
			
		<div id="content">
                    <h1>About Us</h1>
                       <?php
					include("doConnection.php");
					$query="select * from about_us";
					
					if($rs=mysql_query($query,$con))
					{
					
						while($obj=mysql_fetch_row($rs))
						{
							if($obj[0]=="peragraph")
							{
								echo "<p>","$obj[1]","</p>";					
							}
							else
							{
								echo "<div id='content'> </div>";					
							}		
						}
					}
		?>
	</div>
	</div>
</div>
    
<?php
include 'footer.php';
?>