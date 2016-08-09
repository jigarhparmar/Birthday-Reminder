<?php
    @session_start();
    extract($_POST); 
    extract($_SESSION);
    echo $username;
?>
<?php
        include '../doConnection.php';
       // $sql="select * from rem where loginId=select loginId from login where userName='"$username"'";
	//$result=mysql_query($sql,$con);
	require_once('class.phpmailer.php');
	require_once('class.smtp.php');
	$pass="123456";
	$email="gupta.nikhil.0512@gmail.com";
	$message="Your passowrd is\r\n".$pass;
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
		$mail->Subject    = "a";
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
?>