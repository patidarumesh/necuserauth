
<?php
include "loginform.php";
session_start();
include 'databaseConn.php';

if (isset($_POST['username']) && isset($_POST['password'])) {

    function validate($data)
    {
        $data = trim($data);
        $data = htmlspecialchars($data);
        $data = stripcslashes($data);
        return $data;
    }
    $username = validate($_POST['username']);
    $password = validate($_POST['password']);
    if (empty($username)) {
        echo "<br>";
        header("Location: login.php?error=Username is required");
        exit();
    } elseif (empty($password)) {
        echo "<br>";
        header("Location: login.php?error=Password is required");
        exit();
    } else {
        $sql = "SELECT * FROM faculty WHERE faculty_id='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql); //result variable will contain either the result set or an error message
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['faculty_id'] === $username && $row['password'] === $password) {
                $_SESSION['faculty_id'] = $row['faculty_id'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['email'] = $row['email'];
                header("Location: loggedin.php");
                exit();
            } else { //If there is a database connection issue, or if there is a problem with the query itself, then the result set may not contain any rows, even if  the username and password are correct.
                echo "<br>";
                header("Location: login.php?error=Something went wrong");
                exit();
            }
        } 
        else {
            echo "<br>";
            header("Location: login.php?error=Incorrect User Name or password");
            exit();
        }
    }
}
?>


