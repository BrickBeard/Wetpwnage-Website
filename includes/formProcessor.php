<?php
require_once '../PHPMailer/PHPMailerAutoload.php';

//---------  ReCaptcha Validation

//---------  End of ReCaptcha Validation

$mail = new PHPMailer;

/*$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPDebug = 2;*/
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$emailId = $_POST['emailId'];


$mail->From = 'brickbeard@wetpwnage.com';
$mail->FromName = "The Code Nub";
$mail->addReplyTo($email,$name);
$mail->addAddress($emailId, 'Wetpwnage');
$mail->addAddress('brickbeard.io@gmail.com', 'BrickBeard Check');

$mail->isHTML(true);

$mail->Subject = 'Wetpwnage.com Visitor Email';
$mail->Body = '<html><p>You received an email from the Wetpwnage Website: <br><br><b>Name</b>: '.$name.'<br><b>Message</b>: '.$message.'<br><b>Email</b>: '.$email.'</p></html>';
$mail->AltBody = 'Alternate Body';

if(!$mail->send()) {
    echo "Mail Error: " . $mail->ErrorInfo;    
} else {
    echo "<script language='javascript' type='text/javascript'>
        alert('Thank you for your email!');
        window.location = '../ContactUs';
    </script>";
}
?>