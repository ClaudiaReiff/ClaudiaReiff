<?php
if(isset($_POST['submit'])){

  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $hashedPwd = crypt($password, 'rainbow');

  $myFile = fopen("csv/" .$name .".csv","w") or die("Error");
  $content = file_get_contents("csv/" .$name .".csv");
  if(empty($content)) {
    $content = "Name;Surname;Email;Password\n";
  }
  $content .= "\"$name\";\"$surname\";\"$email\";\" $hashedPwd\"\n";
  fwrite($myFile,$content);
  fclose($myFile);

  session_start();
  $_SESSION['loggedin'] = true;
  header("location:home.html");
}
