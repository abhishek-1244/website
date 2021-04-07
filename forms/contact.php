<?php

  $receiving_email_address = "genfo.doc@gmail.com, contact@geniusinfotechs.com";

  if( file_exists($php_email_form = 'forms/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form();
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];
  
  $contact->message="name:- ".$_POST['name']."\n"."Email:- ".$_POST['email']."\n"."Subject:- ".$_POST['subject']."\n\n"."Message:- ".$_POST['message'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  echo $contact->send();
?>
