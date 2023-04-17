<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
    <link rel="stylesheet" href="registration.css" type="text/css">
</head>
<body>
	<h2>Register</h2>
    <?php if(isset($_GET['success'])) {?>
		<div style="color: green;"><?php echo $_GET['success']; ?></div>
	<?php } ?>
    <?php if(isset($_GET['error'])) {?>
	<div style="color: red;"><?php echo $_GET['error']; ?></div>
    <?php } ?>
	<form action="register.php" method="POST">
		<label>Full Name</label>
		<input type="text" name="name" required><br><br>

        <label>Email</label>
	    <input type="email" name="email" required ><br><br>

	    <label>Username</label>
	    <input type="text" name="username" required><br><br>

	    <label>Password</label>
	    <input type="password" name="password" required><br><br>

	    <button type="submit">Register</button>
        <button type="button" name ="login" onclick="window.location.href='login.php'">Login</button>
    </form>
</body>
</html>