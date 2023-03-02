<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>Home</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/overrides.css">
  <link rel="stylesheet" href="css/style.css">

  <meta name="theme-color" content="#fafafa">
</head>

<body>

<form class="container">
  <label for="email">Email</label>
  <input type="text" id="email" name="email" placeholder="Email" required>

  <label for="password">Password</label>
  <input type="password" id="password" name="password" placeholder="Password"
         required pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$">

  <input type="submit" name="submit" value="Login">
</form>

<div>
  <a href="register.html">Already registered?</a>
</div>

</body>
</html>
