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

    $guestSql ="INSERT INTO holzlehen.guest (email, name, surname, phone, address_id)
        SELECT ?, ?, ?, ?, @addressId
        FROM dual
        WHERE NOT EXISTS (SELECT 1 FROM guest WHERE email = ?);";

    $bookingSql = "INSERT INTO booking (booking_date, check_in, check_out, guest_nr, guest_address_id, guest_email, apartment_id)
        VALUES (CURDATE(), ?, ?, ?, @addressId, ?, ?);";

    $pdo->beginTransaction();

    $pdo->prepare($addressSql)->execute([$street, $city, $postalCode, $country]);
    $addressId = $pdo->lastInsertId();

    $pdo->prepare(str_replace('@addressId', $addressId, $guestSql))->execute([$email, $name, $surname, $phone,$email]);
    $pdo->prepare(str_replace('@addressId', $addressId, $bookingSql))->execute([$checkIn, $checkOut, $guestNr, $email,$apartment]);

    $pdo->commit();
  }
