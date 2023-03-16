<?php
if(isset($_POST['submit'])){

  $gender = $_POST['gender'];
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $birthday = $_POST['birthday'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $street = $_POST['street'];
  $residence = $_POST['residence'];
  $postalCode = $_POST['postalCode'];
  $region = $_POST['region'];
  $phone = $_POST['phone'];

  $hashedPwd = crypt($password, 'rainbow');

  $myFile = fopen("csv/" .$name .".csv","w") or die("Error");
  $content = file_get_contents("csv/" .$name .".csv");
  if(empty($content)) {
    $content = "Gender;Name;Surname;Birthday;Email;Password;Street;Residence;PostalCode;Region;Phone\n";
  }
  $content .= "\"$gender\";\"$name\";\"$surname\";\"$birthday\";\"$email\";\"$hashedPwd\";\"$street\";\"$residence\";\"$postalCode\";\"$region\";\"$phone\"\n";
  fwrite($myFile,$content);
  fclose($myFile);

  session_start();
  $_SESSION['loggedin'] = true;
  header("location:home.php");
}

if(isset($_GET['logout']) && $_GET['logout']){
  session_start();
  session_destroy();
  header("location:index.php");
}
