<?php
include_once('connection.php');
$database = new DatabaseConnection();
$pdo = $database->getConnection();

$statement = $pdo->prepare( "SELECT * FROM appartment WHERE id = 1;");
$statement->execute();
$appartment = $statement->fetch();
?>

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/overrides.css">
<link rel="stylesheet" href="css/main.css">

<div style="padding-right: 40px;padding-left: 40px">
  <?php include('menu.php')?>
  <div style="display: flex;height: 350px">
    <div style="background-image: url('img/background.png');width: 65%;height: 100%;border-radius: 4px"></div>
    <div style="width: 35%;height: 100%">
      <div style="background-image: url('img/background.png');height: 50%;margin-left: 10px;border-radius: 4px"></div>
      <div style="display: flex;height: 50%;margin-left: 10px">
        <div style="background-image: url('img/background.png');width: 100%;margin-right: 10px;margin-top: 10px;border-radius: 4px"></div>
        <div style="background-image: url('img/background.png');width: 100%;margin-top: 10px;border-radius: 4px"></div>
      </div>
    </div>
  </div>

  <div style="display: flex;height: 50px">
    <div style="width: 50%">
      <div style="font-size: 36px;font-weight: bold;color: black;margin-top: 20px">Ferienwohnung<?php echo $appartment["name"];?></div>

      <p>
        Welcome to our beautiful holiday apartment available for rent! Located in a prime location, our apartment is the perfect choice for anyone looking for a comfortable and convenient place to stay during their vacation.
        As you step into our spacious apartment, you'll immediately feel at home. The living room is tastefully furnished with comfortable seating and a flat-screen TV for your entertainment. The fully equipped kitchen is perfect for preparing delicious meals and comes complete with all the necessary appliances and utensils.
        The apartment features two cozy bedrooms that can accommodate up to four guests. The master bedroom comes with a comfortable queen-sized bed and an en-suite bathroom for added privacy. The second bedroom features two twin beds and a separate bathroom.
      </p>
    </div>
    <div style="width: 50%">
      <h2>50/night</h2>
      <form action="booking.php" method="post">
        <div style="display:flex;">
          <div style="flex: 1">
            <label for="checkIn">Check-In</label>
            <input type="date" id="checkIn" name="checkIn">
          </div>
          <div style="flex: 1">
            <label for="checkOut">Check-Out</label>
            <input type="date" id="checkOut" name="checkOut">
          </div>
        </div>

        <div>
          <label for="guestNr">Guests</label>
          <select name="guestNr" id="guestNr">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
          </select>
        </div>
        <div>
          <input type="submit" value="Book Now">
        </div>
      </form>
    </div>
  </div>


</div>
