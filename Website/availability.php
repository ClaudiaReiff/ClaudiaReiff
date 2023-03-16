<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/overrides.css">
<link rel="stylesheet" href="css/main.css">



<div style="padding-right: 40px;padding-left: 40px">

  <div style="display: flex;width: 100%;height: 60px;align-items: center">
    <div style="flex: 1">
      <div style="display: flex;align-items: center;justify-content: start">
        <img src="img/logo2.png" style="width: 80px;height: 80px">
        <h2>Holzlehen</h2>
      </div>
    </div>
    <div style="flex: 1">
      <div style="display: flex;justify-content: center;align-items: center">
        <ul>
          <li class="menu-item" style="color: black">Apartments</li>
          <li class="menu-item" style="color: black">Activities</li>
          <li class="menu-item" style="color: black">About Us</li>
        </ul>
      </div>
    </div>
    <div style="flex: 1">
      <div style="display: flex;justify-content: end;align-items: end">
        <button class="button" onclick="logOut()" style="margin-right: 15px">Contact Us</button>
      </div>
    </div>
  </div>

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
      <div style="font-size: 36px;font-weight: bold;color: black;margin-top: 20px">Ferienwohnung Bergliebe</div>

      <p>
        Welcome to our beautiful holiday apartment available for rent! Located in a prime location, our apartment is the perfect choice for anyone looking for a comfortable and convenient place to stay during their vacation.
        As you step into our spacious apartment, you'll immediately feel at home. The living room is tastefully furnished with comfortable seating and a flat-screen TV for your entertainment. The fully equipped kitchen is perfect for preparing delicious meals and comes complete with all the necessary appliances and utensils.
        The apartment features two cozy bedrooms that can accommodate up to four guests. The master bedroom comes with a comfortable queen-sized bed and an en-suite bathroom for added privacy. The second bedroom features two twin beds and a separate bathroom.
      </p>
    </div>
    <div style="width: 50%">
      <h2>50/night</h2>
      <form>
        <div style="display:flex;">
          <div style="flex: 1">
            <label>Check-In</label>
            <input type="date">
          </div>
          <div style="flex: 1">
            <label>Check-Out</label>
            <input type="date">
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





<!--<div class="">Das Apartment <?php echo $row["name"]; ?> ist frei.</div>-->

<?php
if(isset($_GET['guestNr'])){

  $guestNr = $_GET['guestNr'];
  $petNr = $_GET['petNr'];
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
                FROM booking
                WHERE check_in <= '$checkIn' AND check_out >= '$checkOut');";

  $result = mysqli_query($conn, $sql);

  //echo "Anzahl der Gäste: " .$guestNr . "<br>";
  //echo "Anzahl der Haustiere: " .$petNr . "<br>";
  //echo "Anreise: " .$checkIn . "<br>";
  //echo "Abreise: " .$checkOut . "<br>";

  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      //echo "Name: " . $row["name"] . "<br>";
      //include("available_cards.php");
    }
  } else {
    echo "Keine Wohnung verfügbar.";
  }

  mysqli_close($conn);
}


