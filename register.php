<?php
session_start();
include 'databaseConn.php';

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password'])){

	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$name = validate($_POST['name']);
	$email = validate($_POST['email']);
	$username = validate($_POST['username']);
	$password = validate($_POST['password']);

	$sql = "SELECT * FROM faculty WHERE faculty_id='$username'";
	$result = mysqli_query($conn, $sql);

	if(mysqli_num_rows($result) > 0){
		header("Location: registrationform.php?error=The username is already taken");
	    exit();
	}

	$sql2 = "INSERT INTO faculty (name, email, faculty_id, password) VALUES ('$name', '$email', '$username', '$password')";
	$result2 = mysqli_query($conn, $sql2);

	if($result2){
		$_SESSION['name'] = $name;
		header("Location: registrationform.php?success=Registration successful. Welcome ".$_SESSION['name']."!");
	    exit();
	}else{
		header("Location: registrationform.php?error=Unknown error occurred. Please try again.");
	    exit();
	}

}else{
	header("Location: registrationform.php");
	exit();
}
?>