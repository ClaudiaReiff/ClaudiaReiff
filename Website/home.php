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

      <div style="height: 15%">
        <header>
          <div style="display: flex;width: 100%;height: 80px;align-items: center">
            <div style="flex: 1">
              <div class="logo"></div>
            </div>
            <div style="flex: 1">
              <div style="display: flex;justify-content: center;align-items: center">
                <ul>
                  <li class="menu-item">Apartments</li>
                  <li class="menu-item">Activities</li>
                  <li class="menu-item">About Us</li>
                </ul>
              </div>
            </div>
            <div style="flex: 1">
              <div style="display: flex;justify-content: end;align-items: end">
                <button class="button" onclick="logOut()" style="margin-right: 15px">Contact Us</button>
              </div>
            </div>
          </div>


          <nav class="navigation-bar" style="display: flex;justify-content: space-evenly">

            <div>

            </div>
            <div>

            </div>
          </nav>
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
      <div style="width: 70%;background-color: white; height: 100px;border-radius: 30px">
        <form>
          <div style="display: flex;margin:10px;justify-content: space-evenly;align-items: center">

            <div>
              <label>Guests</label>
              <select>
                <option>1</option>
                <option>2</option>
              </select>
            </div>

            <div>
              <label>Check-In</label>
              <input type="date">
            </div>

            <div>
              <label>Check-Out</label>
              <input type="date">
            </div>

            <div>
              <input type="submit" value="Availability">
            </div>
          </div>
        </form>

      </div>
    </div>
  </div>

  <div style="margin-left: 100px">
    <p>
      Our organic farm is located in a quiet and sunny location, surrounded by lush meadows in Hollersbach im Pinzgau - accessed via Mühlbach im Pinzgau.<br>
      <br>We run an organic hay-milk farm in the Hohe Tauern National Park. Situated idyllically on the edge of the forest, at an altitude of 1000 meters and
      surrounded by the Hohe Tauern mountains, we currently have 23 dairy cows and around 30 young cattle and calves in our open stable.<br>
      <br>From mid-May to the end of September, our cows spend their summer vacation on the alpine meadows in the Hollersbachtal, where you can meet them along the stream trail.<br>
      <br>Our two holiday apartments offer enough space for 4-5 people and are therefore ideal for an unforgettable vacation with family or friends in the beautiful Pinzgau region.
    </p>
  </div>

<script>
  function logOut(){
    location.href = "register.php?logout=true";
  }
</script>

</body>
</html>
