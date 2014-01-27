---
weight: 0
---
<?php
	echo "string";
	error_reporting(E_ALL);
	ini_set('display_errors', 1);

	require 'PHPMailer/PHPMailerAutoload.php';
	$mail  = new PHPMailer();   
    $mail->IsSMTP();

    //GMAIL config
    $mail->SMTPAuth   = true;                  // enable SMTP authentication
    $mail->SMTPSecure = "ssl";                 // sets the prefix to the server
    $mail->Host       = "smtp.gmail.com:465";      // sets GMAIL as the SMTP server

    $mail->Username   = "portfoliomailer.poole.uk.to@gmail.com";  // GMAIL username
    $mail->Password   = "apples1710";            // GMAIL password
    //End Gmail

    $mail->From       = "jonfpoole@gmail.com";
    $mail->FromName   = "Porfolio mailer";
    $mail->Subject    = "Porfolio message from " . $_POST["name"] . " at " . $_POST["organisation"];
    $message = str_replace("\n", "<br/>", $_POST["message"]);
    $mail->MsgHTML($message . "<br/><br/>" . "From: " . $_POST["email"]);

    $mail->AddAddress("jfp6@kent.ac.uk","Jonathan Poole");
    $mail->IsHTML(true);

    if(!$mail->Send()) {//to see if we return a message or a value bolean
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else  {
    	header("Location: {{ site.url }}/message-sent");
		die();
	}
?>