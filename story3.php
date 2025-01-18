<?php
$title = "The Zombie-Infested School";
$story = "
    The once-bustling hallways are silent now, except for the occasional shuffle of decaying feet. The lockers are rusted shut, 
    and blood-streaked handprints mark the walls. You cautiously turn a corner and freeze. A horde of zombies is feasting in the 
    cafeteria. One of them lifts its head, blood dripping from its maw, and locks eyes with you.

    You find a trapdoor beneath the desk in the principal’s office and discover an underground bunker stocked with supplies. 
    But the zombies are pounding on the trapdoor above. A journal reveals the school was a secret lab for creating biological 
    weapons. Determined to survive, you arm yourself for the fight of your life. As the trapdoor breaks open, you face the horde, 
    ready to end the nightmare—or become part of it.
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
            background: url('image/zom.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: Arial, sans-serif;
            color: #fff;
            text-align: center;
            padding: 20px;
        }
        .title {
            font-family: 'Almendra';font-size: 22px;
            text-shadow: 2px 4px 7px rgb(2, 2, 2);
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