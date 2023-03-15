<?php
if(isset($_GET['guestNr'])){

  $guestNr = $_GET['guestNr'];
  $checkIn = $_GET['checkIn'];
  $checkOut = $_GET['checkOut'];

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "holzlehen";

  $conn = mysqli_connect($servername, $username, $password, $dbname);

  $sql = "SELECT * FROM appartment
            WHERE id NOT IN (
                SELECT appartment_id
                FROM reservation
                WHERE check_in <= '$checkIn' AND check_out >= '$checkOut');";

  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      echo "Name: " . $row["name"] . "<br>";
      include("available_cards.php");
    }
  } else {
    echo "Keine Wohnung verfügbar.";
  }

  mysqli_close($conn);
}
