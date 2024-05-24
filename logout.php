<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
echo "Successfully Logged Out!~ " . $_SESSION["user"]. ".<br>";
echo '<a href="http://localhost/PROJECTsys/login.html">Click here to go to Login</a>';
?>
</body>
</html>