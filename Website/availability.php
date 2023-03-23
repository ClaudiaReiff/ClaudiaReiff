<?php
if(isset($_GET['guestNr'])){
  $guestNr = $_GET['guestNr'];
  $petNr = $_GET['petNr'];
  $checkIn = $_GET['checkIn'];
  $checkOut = $_GET['checkOut'];

  echo $checkIn;
  echo $checkOut;

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

  while ($row = $statement->fetch()) {
    print_r($row['name'].'<br>');
  }
}
?>


<?php include('menu.php');?>
<div>
  <form>
    <div style="display: flex">
      <label>Test</label>
      <input type="date">
      <label>Test</label>
      <input type="date">
      <label>Test</label>
      <select></select>
      <label>Test</label>
      <select></select>
      <input type="submit">
    </div>

  </form>
</div>

<div style="width: 100%;display: flex;flex-direction: row">

  <div style="width: 100%;margin: 20px;padding-left: 10px">
    <div style="font-size: 30px;font-weight: bold">Apartments found(2)</div>
    <?php if (!empty($apartments)) {
      foreach ($apartments as $apartment):?>

        <div style="width: 100%;height: 350px;background-color: blue;margin-bottom: 5px;display: flex;flex-direction: row">
          <div style="height: 100%;width: 25%;background-image: url('img/background.png');border-radius: 4px"></div>
          <div style="height: 100%;width: 75%">
            <div style="font-size: 24px"><?php echo($apartment['name']);?></div>
          </div>
        </div>

      <?php endforeach;
    } ?>
</div>






