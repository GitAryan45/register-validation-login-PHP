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
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        img {
            align-items: center;
        }

        div {
            color: red;
        }
    </style>

    <?php
    echo "<h1 align='center'>Welcome   " . $_SESSION["user"] . "</h1><div align='center'><h2>Lo enjoy krlo Thak gaye hoge Login Krke<div><h2><button><a href='http://localhost/PROJECTsys/logout.php'>Logout</a></button>";
    ?>

    <!-- <img src="https://indianmemetemplates.com/wp-content/uploads/ye-lo-paani-peello.jpg" width="700px" height="430px"> -->
    <!-- <iframe width=400px height=400 frameborder="0" src="https://memes.co.in/embed,980?autoplay=1&loop=1&autopause=0" allow="autoplay" autoplay=1></iframe> -->
    <img src="https://media.tenor.com/K-o_ckzYIE4AAAAd/haa-dil-vichon-tere-liye-time-kadh-ke-she-dont-know.gif" alt="">
    <!-- <video src="https://cdn.memestube.com/dil-vich-tere-liye-video-meme-download.mp4" id="video" autoplay></video> -->
    <!-- <video width=”500” autoplay muted controls > 
	<source src=”https://cdn.memestube.com/dil-vich-tere-liye-video-meme-download.mp4” type=”video/mp4”> 
</video> -->

</body>

</html>