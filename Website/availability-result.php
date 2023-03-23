<?php
if(isset($_GET['guestNr'])){
  $guestNr = $_GET['guestNr'];
  $checkIn = $_GET['checkIn'];
  $checkOut = $_GET['checkOut'];

  include_once('connection.php');
  $database = new DatabaseConnection();
  $pdo = $database->getConnection();

  $availabilitySql = "SELECT * FROM apartment
         WHERE id NOT IN (
         SELECT apartment_id FROM booking
         WHERE check_in <= :check_in AND check_out >= :check_out);";

  $statement = $pdo->prepare( $availabilitySql);
  $statement->bindParam(':check_in', $checkIn);
  $statement->bindParam(':check_out', $checkOut);

  $statement->execute();
  $i = 0;

  while ($row = $statement->fetch()) {
    $apartments[] = $row; // add each row to the array
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Availability</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/overrides.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/cards.css">
</head>

<?php include('components/menu.php');?>
<body style="background-color: #F8F8F8">

  <div style="width: 100%;display: flex;flex-direction: row">

    <div style="width: 75%;margin: 20px;padding-left: 10px">
      <div style="font-size: 20px;margin-bottom: 10px">Apartments available</div>
      <?php if (!empty($apartments)) {
        foreach ($apartments as $apartment):?>

          <div class="cookie-card" style="margin-bottom: 10px;height: 200px;">

            <div style="display: flex;flex-direction: row">
              <div style="margin-top: 10px;margin-right: 20px" onclick="location.href='apartment1.php'">
                <img style="width: 190px;height: 190px;border-radius: 10px" src="img/background.png">
              </div>
              <div>
                <div style="display: flex;justify-content: space-between">
                  <div>
                    <span class="title"><?php echo($apartment['name']);?></span>
                    <div style="display: flex;margin-top: 8px">
                      <div style="margin-right: 10px"><?php echo($apartment['guest_nr']) ;?> Guest</div>
                      <div style="margin-right: 10px"><?php echo($apartment['bedroom_nr']) ;?> Bedroom</div>
                      <div><?php echo($apartment['bedroom_nr']) ;?> Bathroom</div>
                    </div>
                  </div>
                  <div style="font-weight: bold"><?php echo($apartment['price']) ;?>€ per night</div>
                </div>
                <p class="description"><?php echo($apartment['description']) ;?></p>
                <div class="actions">
                  <div>
                    <button class="accept" onclick="location.href='booking.php'">Request</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach;
      } ?>
    </div>
</body>








