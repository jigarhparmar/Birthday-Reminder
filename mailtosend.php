<?php
    @session_start();
    extract($_POST); 
    extract($_SESSION);
    //echo $username;
?>
<?php
        include 'doConnection.php';
       
	require_once('PHP mailer/class.phpmailer.php');
	require_once('PHP mailer/class.smtp.php');
      
        $today=date("Y-m-d");
        echo $today;
         $sql="select * from rem where remDate='$today'";
	$result=mysql_query($sql,$con);
        
        while($row=mysql_fetch_row($result))
        {
            $pass=$row[1];
            $email=$row[7];
            echo $email;
            $message="<h2>$row[1]</h2>$row[2] $row[5]";
            echo $message;
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->CharSet="UTF-8";
		$mail->SMTPSecure = 'ssl';
		$mail->Host = 'smtp.gmail.com';
		$mail->Port = 465;
		$mail->Username = 'remind.me.next247@gmail.com';
		$mail->Password = 'remind247';
		$mail->SMTPAuth = true;
		
		$mail->From = 'noreply@slambook.in';
		$mail->FromName = 'Remider';
		$mail->AddAddress($email);
		
		$mail->IsHTML(true);
		$mail->Subject    = $row[1];
		$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!";
		$mail->Body    = $message;
		if(!$mail->Send())
		{
			echo "Mail not send";
		}
		else
		{
			echo "Mail sent";
		}
        }
        
        
?>