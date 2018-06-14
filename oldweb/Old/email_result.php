<?php
require 'PHPMailer-master/PHPMailerAutoload.php';


  $Firstname = $_POST['firstname'];
  $Lastname = $_POST['lastname'];
  $Companyname = $_POST['companyname'];
  $Address = $_POST['address'];
  $Mobile = $_POST['mobile'];
  $Office = $_POST['office'];
  $Fax = $_POST['fax'];
  $Email = $_POST['email'];
  $Interested = $_POST['interested'];
  $IntersetedProduct = $_POST['intersetedproduct'];
  $Note = $_POST['note'];

  $body = array("<b>First Name</b>", $Firstname, "<b>Last Name</b>", $Lastname, "<b>Company Name</b>", $Companyname,
   "<b>Address</b>", $Address, "<b>Mobile Phone</b>", $Mobile, "<b>Office Phone</b>", $Office, 
   "<b>Fax</b>", $Fax, "<b>Email</b>", $Email, "<b>Note</b>", $Note, "<b>I am interested in</b>", $Interested,
    "<b>Interested product</b>", $IntersetedProduct,); 

$mail = new PHPMailer(); 
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
//$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
$mail->Host = "mail.databar.co.th";
$mail->Port = 587; // or 587
$mail->IsHTML(true);

$mail->Username = 'info@databar.co.th';
$mail->Password = 'dbINFO2015';
$mail->SetFrom("info@databar.co.th");
$mail->Subject = "Inquiry";
$mail->Body =   "<table><tr><td>". $body[0] . "</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $body[1] . "</td></tr><tr><td>" 
                                 . $body[2] . "</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $body[3] . "</td></tr><tr><td>" 
                                 . $body[4] . "</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $body[5] . "</td></tr><tr><td>" 
                                 . $body[6] . "</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $body[7] . "</td></tr><tr><td>" 
                                 . $body[8] . "</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $body[9] . "</td></tr><tr><td>"
                                 . $body[10] ."</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $body[11] . "</td></tr><tr><td>"
                                 . $body[12] ."</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $body[13] . "</td></tr><tr><td>" 
                                 . $body[14] . "</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $body[15] ."</td></tr><tr><td>"
                                 . $body[16] . "</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $body[17] ."</td></tr><tr><td>"
                                 . $body[18] . "</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $body[19] ."</td></tr><tr><td>"
                                 . $body[20] . "</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $body[21] ."</td></tr></table>";
$mail->AddAddress('info@databar.co.th');
//$mail->AddAddress('papamamabablue@gmail.com');
 if(!$mail->Send())
    {
    echo "Mailer Error: " . $mail->ErrorInfo;
    }
    else
    {
     header("location:email.php");
    }
?>