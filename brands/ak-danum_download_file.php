<?php
	

	require("../PHPMailer/src/PHPMailer.php");
  	require("../PHPMailer/src/SMTP.php");
  	require("../PHPMailer/src/Exception.php");		
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSMTP(); // enable SMTP



	$ak_danum_d_name= $_POST['ak_danum_d_name'];
	$ak_danum_d_mob=$_POST['ak_danum_d_mob'];
	$ak_danum_d_email=$_POST['ak_danum_d_email'];
	

	$emailBody= "

	<html>
            <body>
                <table style='width:600px;'>
                    <tbody>
                        <tr>
                            <td style='width:150px'><strong>Name: </strong></td>
                            <td style='width:400px'>$ak_danum_d_name</td>
                        </tr>
                       
                       <tr>
                            <td style='width:150px'><strong>Email ID: </strong></td>
                            <td style='width:400px'>$ak_danum_d_email</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Mobile No: </strong></td>
                            <td style='width:400px'>$ak_danum_d_mob</td>
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
	$mail->Subject = "AK Danum Bathroom Accessories Brochure Downloaded on Website";
	$mail->Body = $emailBody;
	$mail->addAddress('mayank@fincrm.net');
	$mail->Send();


















