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

  $headers = "From: My App <reiff.claudia@gmail.com>\r\n";
  $headers .= "Reply-To: My App Support <reiff.claudia@gmail.com>\r\n";
  $headers .= "X-Mailer: PHP/" . phpversion();



  function xxmail($to, $subject, $body, $headers)
  {
    // SMTP server configuration
    $smtp_host = 'smtp.gmail.com';
    $smtp_port = 587; // port for STARTTLS encryption
    $smtp_username = 'reiff.claudia@gmail.com';
    $smtp_password = 'Q2xAUmYyMDIw';

    // Connect to the SMTP server
    $smtp = fsockopen($smtp_host, $smtp_port, $errno, $errstr, 5);
    if (!$smtp) {
      echo("Failed to connect to SMTP server: $errno $errstr");
      return false;
    }

    // Greet the SMTP server
    $response = fgets($smtp);
    if (substr($response, 0, 3) != '220') {
      echo("SMTP server did not respond properly: $response");
      return false;
    }

    // Send EHLO command
    fwrite($smtp, "EHLO " . $_SERVER['SERVER_NAME'] . "\r\n");
    $response = fgets($smtp);
    if (substr($response, 0, 3) != '250') {
      echo("SMTP server did not accept EHLO command: $response");
      return false;
    }

    // Start TLS encryption
    fwrite($smtp, "STARTTLS\r\n");
    $response = fgets($smtp);
    if (substr($response, 0, 3) != '220') {
      echo("SMTP server did not respond properly to STARTTLS: $response");
      return false;
    }
    stream_socket_enable_crypto($smtp, true, STREAM_CRYPTO_METHOD_TLS_CLIENT);

    // Authenticate
    fwrite($smtp, "AUTH LOGIN\r\n");
    $response = fgets($smtp);
    if (substr($response, 0, 3) != '334') {
      echo("SMTP server did not respond properly to AUTH LOGIN: $response");
      return false;
    }
    fwrite($smtp, base64_encode($smtp_username) . "\r\n");
    $response = fgets($smtp);
    if (substr($response, 0, 3) != '334') {
      echo("SMTP server did not respond properly to username: $response");
      return false;
    }
    fwrite($smtp, $smtp_password . "\r\n");
    $response = fgets($smtp);
    if (substr($response, 0, 3) != '235') {
      echo("SMTP server did not accept password: $response");
      return false;
    }

    // Envelope
    fwrite($smtp, "MAIL FROM:<reiff.claudia@gmail.com>\r\n");
    $response = fgets($smtp);
    if (substr($response, 0, 3) != '250') {
      echo("SMTP server did not accept MAIL FROM command: $response");
      return false;
    }
    fwrite($smtp, "RCPT TO:<$to>\r\n");
    $response = fgets($smtp);
    if (substr($response, 0, 3) != '250') {
      echo("SMTP server did not accept RCPT TO command: $response");
      return false;
    }
    fwrite($smtp, "DATA\r\n");
    $response = fgets($smtp);
    if (substr($response, 0, 3) != '354') {
      echo("SMTP server did not accept DATA command: $response");
      return false;
    }

    // Header
    fwrite($smtp, "To: $to\r\n");
    if (strlen($subject)) {
      fwrite($smtp, "Subject: $subject\r\n");
    }
    if (strlen($headers)) {
      fwrite($smtp, $headers);
    }
    fwrite($smtp, $headers . "\r\n");

    // Body
    if (strlen($body)) {
      fwrite($smtp, "$body\r\n");
    }
    fwrite($smtp, "\r\n.\r\n");
    $response = fgets($smtp);
    if (substr($response, 0, 3) != '250') {
      echo("SMTP server did not accept message body: $response");
      return false;
    }

    // Close
    fwrite($smtp, "QUIT\r\n");
    fclose($smtp);

    return true;
  }
  xxmail('benni@ledl.org','Test','Test',$headers);
}


