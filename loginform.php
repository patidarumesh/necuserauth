<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div class="form">
  <form action="login.php" method="post">
    <h2>Faculty Login</h2>
    <?php
      if (isset($_GET['error'])) {
        echo '<p class="error">';
        echo $_GET['error'] . "</p>";
      }
    ?>
    <lable for="username"></lable><br>
    <input type="varchar" name="username" placeholder="Username"><br>
    <lable for="password"></lable><br>
    <input type="password" name="password" placeholder="Password"><br>
    <button type="submit" name="submit">Login</button>
    <button type="button" name ="register" onclick="window.location.href='register.php'">Register</button>
    <button type="button" onclick="window.location.href='forgetpassword.php'">Forget Password</button>
</div>
</body>
</html>
