<?php
  
  // $receiving_email_address = 'info@casi.live';

  // if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
  //   include( $php_email_form );
  // } else {
  //   die( 'Unable to load the "PHP Email Form" Library!');
  // }

  // $contact = new PHP_Email_Form;
  // $contact->ajax = true;
  
  // $contact->to = $receiving_email_address;
  // $contact->from_name = $_POST['name'];
  // $contact->from_email = $_POST['email'];
  // $contact->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  // $contact->add_message( $_POST['name'], 'From');
  // $contact->add_message( $_POST['email'], 'Email');
  // $contact->add_message( $_POST['message'], 'Message', 10);

  // echo $contact->send();

mb_internal_encoding("UTF-8");

$to = 'info@casi.live';
$subject = 'Message From CASI Contact Form.';

$name = "";
$email = "";
// $phone = "";
$message = "";

if( isset($_POST['name']) ){
    $name = $_POST['name'];
    //echo $name;

    $body .= "Name: ";
    $body .= $name;
    $body .= "\n\n";
}
if( isset($_POST['email']) ){
    $email = $_POST['email'];
    //echo $email;

    $body .= "";
    $body .= "Email: ";
    $body .= $email;
    $body .= "\n\n";
}

if( isset($_POST['message']) ){
    $message = $_POST['message'];
    //echo $message;

    $body .= "";
    $body .= "Message: ";
    $body .= $message;
    $body .= "\n\n";
}

$headers = 'From: ' .$email . "\r\n";

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
mb_send_mail($to, $subject, $body, $headers);
    echo '<div class="status-icon valid"><i class="fa fa-check"></i></div>';
}
else{
    echo '<div class="status-icon invalid"><i class="fa fa-times"></i></div>';
}


?>
