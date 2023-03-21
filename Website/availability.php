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
    <div style="font-size: 30px;font-weight: bold">Appartments found(2)</div>
    <div style="width: 100%;height: 350px;background-color: blue;margin-bottom: 5px;display: flex;flex-direction: row">
      <div style="height: 100%;width: 25%;background-image: url('img/background.png');border-radius: 4px"></div>
      <div style="height: 100%;width: 75%">
        <div style="font-size: 24px">Bergliebe</div>
      </div>
    </div>
    <div style="width: 100%;height: 350px;background-color: blue;margin-bottom: 5px;display: flex;flex-direction: row">
      <div style="height: 100%;width: 25%;background-image: url('img/background.png');border-radius: 4px"></div>
      <div style="height: 100%;width: 75%">
        <div style="font-size: 24px">Bergliebe</div>
      </div>
    </div>
  </div>

</div>


<?php
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
    print_r($row['name'].'<br>');
  }
}





