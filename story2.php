<?php
$title = "The Monster-Filled Forest";
$story = "
    The forest is alive with eerie sounds, from distant howls to the rustling of leaves that never seem to stop. 
    You clutch a flashlight as you navigate the dense trees, their twisted branches clawing at the sky. Then, a low growl 
    emerges from the shadows, and a pair of glowing red eyes stare back at you. More pairs of eyes appear, surrounding you.

    Just when all hope seems lost, the ground beneath you gives way, and you tumble into a hidden cavern. The monsters snarl above, 
    but they don’t follow; something in the cavern frightens even them. A faint light flickers deeper within. You follow it, finding 
    an ancient altar glowing with runes. A voice whispers in your head: “Choose power or perish.” With trembling hands, you touch 
    the altar, and the world fades into black. When you awaken, you are no longer prey but a creature of the forest yourself, 
    a guardian trapped for eternity.
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
            background: url('image/monster.jpg') no-repeat center center fixed;
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
            background-color:rgb(121, 121, 121);
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
            background-color:rgb(65, 65, 65);
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