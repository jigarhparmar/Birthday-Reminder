<?php
    include 'header_main.php';
?>

<div id="wrapper">
	<div id="page" class="container">
			
		<div id="content">
                    <h1>Contact Us</h1>
                       <?php
					include("doConnection.php");
					$query="select * from contact_us";
					
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