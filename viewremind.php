<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <style type="text/css">
        .mid
        {
            background-color: white;
            width: 80%;
            border-radius: 5px;
        }
        
    </style>
	<title>View Reminder</title>
	<link href="js/css/jquery-ui-1.10.0.custom.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="js/css/bootstrap.min.css" type="text/css"/>
<link rel="stylesheet" href="js/css/bootstrap-responsive.css" type="text/css"/>
<!--<link rel="stylesheet" href="js/css/bootstrap.css" type="text/css"/>-->
<link rel="stylesheet" href="js/css/jquery.qtip.min.css" type="text/css"/>
<script src="js/js/jquery-1.8.3.min.js"></script>
<script src="js/js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="js/js/jquery.qtip.min.js"></script>
<script src="js/js/myjquery.js"></script>

</head>
<?php
    include("header_main.php");
?>


<body>
    
<center>
 <div id="wrapper">
	<div id="page" class="container">
		<div id="content">

            
<form action='index.php' method='post' class="form-inline">

    
<!--//////////////////////////////////// Edit Dialog ///////////////////////////////////////-->

    <div id="edit_dialog" title="Update User Information" >
        <div class="control-group">
            <div>Reminder ID :</div>
            <div>
                <input title="No permission to edit." type="text" name="id1" id="id1"/>
            </div>
        </div>
        
        <div class="control-group">
                <label class="control-label">Title :</label>
            <div class="controls">
               <select id="title1" value="event" name="title1"  required="true"> 
                        <option selected="selected">Birthday</option>
                        <option value="Meeting">Meeting</option>
                        <option value="Note">Note</option>
                        <option value="Anniversaty">anniversary</option>
                </select>
            </div>
        </div>
        <div class="control-group">
                <label class="control-label">Reminder Name :</label>
            <div class="controls">
                <input type="text" name="name1" id="name1"></input>
            </div>
        </div>
        <div class="control-group">
                <label class="control-label">Reminder Date :</label>
            <div class="controls">
                <input type="date" name="date1" id="date1"></input>
            </div>
        </div>
        <div class="control-group">
                <label class="control-label">Reminder Time :</label>
            <div class="controls">
                <input type="time" name="time1" id="time1"></input>
            </div>
        </div>
        <div class="control-group">
                <label class="control-label">Reminder Description :</label>
            <div class="controls">
                <textarea name="desc1" id="desc1"></textarea>
            </div>
        </div>
    </div>
	
<!--//////////////////////////////////// Delete Dialog ///////////////////////////////////////-->

    <div id="delete_dialog" title="Delete User Information">
        <div class="control-group">
                    <label class="control-label">Are you sure want to delete this record?</label>
                <div class="controls">
                    <input type="hidden" name="id2" id="id2"/>
                </div>
        </div>
            
    </div>

<!--////////////////////////////////// Checking Fill Dialog ///////////////////////////////////-->

<div id="d2" title="Checking Empty..." style="display:none;">
	<p>Please do not empty....!</p>
</div>

<?php
        @session_start();
	$con=mysql_connect("localhost","root","");
	mysql_select_db("reminder");
        echo $email;
	$sql="select * from rem where email='$email'";
        $result=mysql_query($sql);
        $num= mysql_fetch_array($result);
        if($num>0)
        {
	echo "<br><br><table border=1 style='width:1000px;' class='user table table-bordered'>";
	echo "<tr>";
	
	echo "<th>Reminder Title</th><th>Reminder Name</th><th>Reminder Date</th><th>Reminder Time</th><th>Description</th><th>Edit</th><th>Delete</th>";
	echo "</tr>";
	
	while($row=mysql_fetch_assoc($result))
	{	
		$id=$row['remId'];
		echo "<tr class='user' id=".$row['remId'].">";
		//echo "<td class=style='text-align:center; display:none;'>".$row['remId']."</td>";
		echo "<td class='title'>".$row['remTitle']."</td>";
		echo "<td class='name' style='text-align:center;'>".$row['remName']."</td>";
		echo "<td class='date' style='text-align:center;'>".$row['remDate']."</td>";
                echo "<td class='time' style='text-align:center;'>".$row['remTime']."</td>";
                echo "<td class='desc' style='text-align:center;'>".$row['remDecs']."</td>";
          
                echo "<td><a class='edit' href='#'><img src='admin/edit.jpg' height=20 width=20/></a></td>";
		
		echo "<td><a href='#' class='delete'><img src='admin/Delete.png' height=20 width=20/></a></td>";
		echo "</tr>";
		
	}
	echo "</table>";
        }
        else
        {
            echo "<h3>No Reminder set.";
        }
        
	mysql_close($con);

?>
</form>
        <br></br>
</div>
</div>
 </div>

    
</center>
</body>
</html>
<?php include("footer.php");?>