<?php 
$title ="Sending Message... | Indy Graphics";
// Bringing in the head.
require_once('head.php');
$title = "Sent Quote";
// Bringing in the header.
require_once('header.php');

// Quote Form Varibles
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$company_name = $_POST['company_name'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$address = $_POST['address'];
$message = $_POST['message'];
//Variable indicating if form is complete or not.
$complete = true; 

if (empty($first_name)) {
      echo 'A first name is required.<br/>';
      $complete = false;  
    }

if (empty($last_name)) {
      echo 'A last name is required.<br/>';
      $complete = false;  
    }
	
if (empty($email)) {
      echo 'Email is required.<br/>';
      $complete = false;  
    }

if (empty($phone_number)) {
      echo 'Phone Number is required.<br/>';
      $complete = false;  
    }

if (empty($address)) {
      echo 'An address is required.<br/>';
      $complete = false;  
    }

if (empty($message)) {
      echo 'Message is required for a quote.<br/>';
      $complete = false;  
    }
// if the form is filled out correctly and send the email with the form content.
if ($complete == true) {
  // Emailing Varibles.
  $email_to = "sales@indygraphics.ca";
  $subject_line = "Contact Form Message From: $first_name $last_name";
  $email_message = "You have received a new Quote Request from indygraphics.ca \n\n ".
        "Here are the details:\n\n ".
        "First Name: $first_name $last_name \n\n ".
		"Company Name: $company_name \n\n ".
        "Email: $email \n\n ".
        "Phone Number: $phone_number \n\n ".
        "Address: \n\n $address  \n\n ".
        "Message: \n\n $message";

  $headers = "From: contact_form@indygraphics.ca";

  mail($email_to,$subject_line,$email_message,$headers);
  echo "<body>
    <p>We have receive your message, we will get back to you as quick as we can.<br />
    Thank-you.</p> 
  </body>";
}

require_once('footer.php');
?> 