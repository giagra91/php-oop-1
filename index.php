<?php
    include("./data/Movie.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oop php</title>

    <style>

        body{
            background-color: lightblue;
            font-family:Arial;
        }
        div{
            text-align: center;
            margin-bottom: 2rem;
        }
    </style>
</head>
<body>

    <div>
        <h3>Film</h3>
        <p>
            Il titolo è: 
            <?php 
                echo $una_volta_hollywood->title;
            ?>
        </p>
        <p>
            Il titolo orignale è: 
            <?php 
                echo $una_volta_hollywood->originalTitle;
            ?>
        </p>
        <p>
            Il film è uscito nelle sale nel 
            <?php 
                echo $una_volta_hollywood->year;
            ?>
        </p>
        <p>
            I generi del film sono:
            <?php 
                echo $una_volta_hollywood->genre;
            ?>
        </p>
    </div>
    <div>
        <h3>Film</h3>
        <p>
            Il titolo è: 
            <?php 
                echo $bastardi_senza_gloria->title;
            ?>
        </p>
        <p>
            Il titolo orignale è: 
            <?php 
                echo $bastardi_senza_gloria->originalTitle;
            ?>
        </p>
        <p>
            Il film è uscito nelle sale nel 
            <?php 
                echo $bastardi_senza_gloria->year;
            ?>
        </p>
        <p>
            I generi del film sono:
            <?php 
                echo $bastardi_senza_gloria->genre;
            ?>
        </p>
    </div>
    <div>
        <h3>Film</h3>
        <p>
            Il titolo è: 
            <?php 
                echo $inception->title;
            ?>
        </p>
        <p>
            Il titolo orignale è: 
            <?php 
                echo $inception->originalTitle;
            ?>
        </p>
        <p>
            Il film è uscito nelle sale nel 
            <?php 
                echo $inception->year;
            ?>
        </p>
        <p>
            I generi del film sono:
            <?php 
                echo $inception->genre;
            ?>
        </p>
    </div>
</body>
</html>