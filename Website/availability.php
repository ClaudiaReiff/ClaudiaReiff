<?php
include('menu.php');
if(isset($_GET['guestNr'])){
  $guestNr = $_GET['guestNr'];
  $petNr = $_GET['petNr'];
  $checkIn = $_GET['checkIn'];
  $checkOut = $_GET['checkOut'];

  include_once('connection.php');
  $database = new DatabaseConnection();
  $pdo = $database->getConnection();

  $availabilitySql = "SELECT * FROM appartment
         WHERE id NOT IN (
         SELECT appartment_id FROM booking
         WHERE check_in <= :check_in AND check_out >= :check_out);";

  $statement = $pdo->prepare( $availabilitySql);
  $statement->bindParam(':check_in', $checkIn);
  $statement->bindParam(':check_out', $checkOut);

  $statement->execute();

  while ($row = $statement->fetch()) {
    print_r($row['name']);
  }
}


