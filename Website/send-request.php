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

  echo $checkIn,$checkOut;
  echo $name,$surname;
}


