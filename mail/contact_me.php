<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['company_name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])	||
   empty($_POST['calltime'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }

$name = $_POST['name'];
$company_name = $_POST['company_name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$calltime = $_POST['calltime'];
$message = $_POST['message'];

// Create the email and send the message
$to = 'i68bizconsult@yahoo.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Inquirer:  $name. Company: $company_name";
$email_body = "You have received an inquiry from i68 Business Consultancy Website.\n\n"."Here are the details:\n\nName: $name\nCompany: $company_name\nEmail: $email_address\nPhone: $phone\nBest Time to Call: $calltime\n\nInquiry:\n$message";
$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
return true;
?>
