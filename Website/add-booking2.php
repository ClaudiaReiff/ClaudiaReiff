<?php

  if(isset($_POST['submit'])){
    $checkIn = $_POST['checkIn'];
    $checkOut = $_POST['checkOut'];
    $guestNr = $_POST['guestNr'];
    $apartment = $_POST['apartment'];

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $postalCode = $_POST['postalCode'];
    $country = $_POST['country'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    include_once('connection.php');
    $database = new DatabaseConnection();
    $pdo = $database->getConnection();

    $addressSql = "INSERT INTO address (street, city, postal_code, country) VALUES (?, ?, ?, ?);";
    $guestSql = "INSERT INTO guest (email, name, surname, phone, address_id) VALUES (?, ?, ?, ?, @addressId);";

    $bookingSql = "INSERT INTO booking (booking_date, check_in, check_out, guest_nr, guest_address_id, guest_email, apartment_id)
        VALUES (CURDATE(), ?, ?, ?, @addressId, ?, 1);";

    $pdo->beginTransaction();

    $pdo->prepare($addressSql)->execute([$street, $city, $postalCode, $country]);
    $addressId = $pdo->lastInsertId();

    $pdo->prepare(str_replace('@addressId', $addressId, $guestSql))->execute([$email, $name, $surname, $phone]);
    $pdo->prepare(str_replace('@addressId', $addressId, $bookingSql))->execute([$checkIn, $checkOut, $guestNr, $email]);

    $pdo->commit();
  }
