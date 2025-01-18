<?php
$title = "The Haunted House";
$story = "
    As you step into the dimly lit house, the door creaks shut behind you, locking with a sinister echo. 
    The air is thick with the scent of decay, and faint whispers drift through the shadows. The floorboards groan 
    under your weight as you walk down the hallway, guided by flickering candles. Suddenly, a mirror at the end of 
    the corridor reflects your silhouette... but the figure moves when you don’t.

    You muster the courage to approach the mirror, but as you do, the whispers grow louder, almost deafening. When you’re 
    close enough to touch the glass, the reflection reaches out, breaking through with a shattering sound. A cold hand grips 
    your wrist and pulls you into the mirror world, where shadows have form, and the house is alive. As you turn to run, 
    the last thing you see is the mirror sealing behind you, leaving no trace of your existence in the real world.
";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href='https://fonts.googleapis.com/css?family=Almendra' rel='stylesheet'>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <style>
        body {
            background: url('image/hantu.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: Arial, sans-serif;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        .title {
            font-family: 'Almendra';font-size: 22px;
            text-shadow: 2px 2px 8px rgb(87, 87, 87);
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
        }
        .back-button {
            display: inline-block;
            background-color: #004e92;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            text-align: center;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        .back-button:hover {
            background-color: #006fc0;
        }
        .story-text {
    background: rgba(0, 0, 0, 0.7); /* Semi-transparent black background */
    padding: 20px; /* Add space around the text */
    border-radius: 10px; /* Rounded corners */
    max-width: 80%; /* Limit the width */
    margin: 20px auto; /* Center the text */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5); /* Optional shadow for extra effect */
}
    </style>
</head>
<body>
    <div class="container">
    <div class="title"><h1><?php echo $title; ?></h1></div>
        <p class="story-text"><?php echo nl2br($story); ?></p>
        <a href="index.html" class="back-button">Back to Magic Doors</a>
    </div>
</body>
</html>
