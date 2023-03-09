<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>Login</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/overrides.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body style="margin: 10px">

  <nav class="navigation-bar">
    <img class="logo" src="img/logo.png">
  </nav>

  <h1>Login</h1>

  <form class="container" method="post">
    <label for="email">Email</label>
    <input type="text" id="email" name="email" placeholder="Email" required>

    <label for="password">Password</label>
    <input type="password" id="password" name="password" placeholder="Password" required>

    <input type="submit" name="submit" value="Login">
  </form>

  <div style="margin-top: 10px">
    <a href="register.html">Register Here</a>
  </div>

  <?php
  if(isset($_POST['submit'])){
    session_start();
    $_SESSION['loggedin'] = true;
    header("location:home.php");
  }
  ?>

</body>
</html>
