<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Home</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/overrides.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/cards.css">
  <link rel="icon" href="favicon.ico">
</head>

<body style="background-color: #F8F8F8">
<div style="position: relative; height: 700px;">
  <div style="background-image: url('img/background.png');background-size: cover; height: 600px">

    <div>
      <header>
        <?php include('components/menu.php')?>
      </header>
    </div>
    <div style="height: 85%;display:flex;justify-content: center;align-items: center">
      <p style="font-size: 36px;font-weight: bold;color: white;text-align: center">
        Vacation on the farm<br>
        Where happiness and freedom are at home
      </p>
    </div>

  </div>
  <div style="height: 80px; position: absolute; z-index: 1;top: 560px;width: 100%;display: flex;justify-content: center">
    <div class="cookie-card" style="width: 55%">
      <?php include ('components/availability.php')?>
    </div>
  </div>
</div>

</body>
</html>
