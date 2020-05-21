<?php
	

	require("PHPMailer/src/PHPMailer.php");
  	require("PHPMailer/src/SMTP.php");
  	require("PHPMailer/src/Exception.php");		
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSMTP(); // enable SMTP
    $name= $_POST['name'];
	$area= $_POST['area'];
	$mob=$_POST['mob'];
	$email=$_POST['email'];
	$msg=$_POST['msg'];
	$date_time=$_POST['date_time'];

	$emailBody= "

	<html>
            <body>
                <table style='width:600px;'>
                    <tbody>
                        <tr>
                            <td style='width:150px'><strong>Name: </strong></td>
                            <td style='width:400px'>$name</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Time: </strong></td>
                            <td style='width:400px'>$date_time</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Area of interest: </strong></td>
                            <td style='width:400px'>$area</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Email ID: </strong></td>
                            <td style='width:400px'>$email</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Mobile No: </strong></td>
                            <td style='width:400px'>$mob</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Message: </strong></td>
                            <td style='width:400px'>$msg</td>
                        </tr>
                    </tbody>
                </table>
            </body>
        </html>

	";

    // Other than gmail.account

	$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
	$mail->SMTPAuth = true; // authentication enabled
	$mail->SMTPSecure = ''; // secure transfer enabled REQUIRED for Gmail
	$mail->Host = "smtp.zoho.com";
	$mail->Port = 587; // or 587
	$mail->IsHTML(true);
	$mail->Username = "info@fincrm.net";
	$mail->Password = "AAA@Fin$%1";
	$mail->SetFrom("info@fincrm.net");
	$mail->Subject = "Enquiry on website contact page";
	$mail->Body = $emailBody;
	$mail->addAddress('mayank@fincrm.net');
	$mail->Send();




















