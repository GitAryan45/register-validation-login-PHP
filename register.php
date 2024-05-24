<?php
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

    $sql = "INSERT INTO reg1(username, password) VALUES ('$username', '$password')";
try{
    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
        echo '<button><a href="http://localhost/PROJECTsys/login.html">Login</a></button>';

    } 
}
    catch (mysqli_sql_exception $e) {
        if ($e->getCode() === 1062) {  // MySQL error code for duplicate entry
            echo "Username '$username' already exists.<br>";
            echo '<a href="register.html"><button>New User? Register</button></a><br>';
            echo '<a href="login.html"><button>Already have Account? Login</button></a>';
        }
    else {
        
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
}

$conn->close();
?>
