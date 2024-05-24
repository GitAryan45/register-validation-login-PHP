<?php
session_start();
$servername = "localhost";
$username = "root";
$password = " ";
$dbname = "niet";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $_SESSION["user"] = $username;

    $sql = "SELECT * FROM reg1 WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        header("Location: http://localhost/PROJECTsys/welcome.php");
        exit();
    } else {
        echo '<h2 style="text-align: center;">Invalid credentials. Welcome Guest.</h2>';
        echo '<a href="login.html"><h2 style="text-align: center;"><button>Login</button></h2></a>';

        
    }
    

    
}

$conn->close();
?>
