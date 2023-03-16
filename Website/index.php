<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Home</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/overrides.css">
  <link rel="stylesheet" href="css/main.css">
</head>

<body>
<div style="position: relative; height: 700px">
  <div style="background-image: url('img/background.png');background-size: cover; height: 600px">

    <div style="height: 15%;padding-right: 40px;padding-left: 40px">
      <header>
        <?php include('menu.php')?>
      </header>
    </div>
    <div style="height: 85%;display:flex;justify-content: center;align-items: center">
      <p style="font-size: 36px;font-weight: bold;color: white;text-align: center">
        Vacation on the farm<br>
        Where happiness and freedom are at home
      </p>
    </div>

  </div>
  <div style="height: 100px; position: absolute; z-index: 1;top: 550px;width: 100%;display: flex;justify-content: center">
    <div style="width: 70%;background-color: white; height: 100px">
      <form method="get" action="availability.php">
        <div style="display: flex;margin:10px;justify-content: space-evenly;align-items: center">

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
            <label for="petNr">Pets</label>
            <select name="petNr" id="petNr">
              <option>1</option>
              <option>2</option>
            </select>
          </div>

          <div>
            <label for="checkIn">Check-In</label>
            <input type="date" id="checkIn" name="checkIn">
          </div>

          <div>
            <label for="checkOut">Check-Out</label>
            <input type="date" id="checkOut" name="checkOut">
          </div>

          <div>
            <input type="submit" value="Availability">
          </div>
        </div>
      </form>

    </div>
  </div>
</div>

</body>
</html>
