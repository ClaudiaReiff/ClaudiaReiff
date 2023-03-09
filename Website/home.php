<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Home</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/overrides.css">
</head>
<body>

<header>
  <nav class="navigation-bar">
    <img class="logo" src="img/logo.png" alt="Logo">
    <div>
      <ul>
        <li style="margin-right: 10px;cursor: pointer">Appartments</li>
        <li style="margin-right: 10px;cursor: pointer">Activities</li>
        <li style="margin-right: 10px;cursor: pointer">Contact</li>
        <li>
          <button class="button" onclick="logOut()">Logout</button>
        </li>
      </ul>
    </div>
  </nav>
</header>

<h1>Welcome to Holzlehen!</h1>

<p>
  Our organic farm is located in a quiet and sunny location, surrounded by lush meadows in Hollersbach im Pinzgau - accessed via Mühlbach im Pinzgau.<br>
  <br>We run an organic hay-milk farm in the Hohe Tauern National Park. Situated idyllically on the edge of the forest, at an altitude of 1000 meters and
  surrounded by the Hohe Tauern mountains, we currently have 23 dairy cows and around 30 young cattle and calves in our open stable.<br>
  <br>From mid-May to the end of September, our cows spend their summer vacation on the alpine meadows in the Hollersbachtal, where you can meet them along the stream trail.<br>
  <br>Our two holiday apartments offer enough space for 4-5 people and are therefore ideal for an unforgettable vacation with family or friends in the beautiful Pinzgau region.
</p>

<img style="width: 450px; height: 300px" src="img/family.png" alt="Family">

<script>
  function logOut(){
    location.href = "register.php?logout=true";
  }
</script>

</body>
</html>
