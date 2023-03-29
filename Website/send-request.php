<?php
if(isset($_POST['submit'])){

  $checkIn = $_POST['checkIn'];
  $checkOut = $_POST['checkOut'];
  $guestNr = $_POST['guestNr'];
  $petNr = $_POST['petNr'];

  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $street = $_POST['street'];
  $city = $_POST['city'];
  $postalCode = $_POST['postalCode'];
  $country = $_POST['country'];


  $to_email = "root@localhost.com";
  $subject = "Simple Email Test via PHP";
  $body = "Hi,nn This is test email send by PHP Script";
  $headers = "From: reiff.claudia@gmail.com";

  if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
  } else {
    echo "Email sending failed...";
  }

}


