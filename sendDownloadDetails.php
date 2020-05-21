<?php
	

	require("PHPMailer/src/PHPMailer.php");
  	require("PHPMailer/src/SMTP.php");
  	require("PHPMailer/src/Exception.php");		
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSMTP(); // enable SMTP



	$d_name= $_POST['d_name'];
	$d_mob=$_POST['d_mob'];
	$d_email=$_POST['d_email'];
	

	$emailBody= "

	<html>
            <body>
                <table style='width:600px;'>
                    <tbody>
                        <tr>
                            <td style='width:150px'><strong>Name: </strong></td>
                            <td style='width:400px'>$d_name</td>
                        </tr>
                       
                       <tr>
                            <td style='width:150px'><strong>Email ID: </strong></td>
                            <td style='width:400px'>$d_email</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Mobile No: </strong></td>
                            <td style='width:400px'>$d_mob</td>
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
	$mail->Subject = "Brochure Download Request on Website";
	$mail->Body = $emailBody;
	$mail->addAddress('mayank@fincrm.net');
	$mail->Send();

















