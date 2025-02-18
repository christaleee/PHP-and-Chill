<?php
session_start();
if (!isset($_SESSION["Name"])) {
    echo "No data available!";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Player Details</title>
</head>
<body>
<div class="playerDetails">
        <div class="playerName">
            <p><strong>First Name:</strong> <span id="Fname"><?php echo $_SESSION["Name"] ?></span></p>
        </div>

        <div class="playerUsername">
            <p><strong>UserName:</strong> <span id="Uname"><?php echo $_SESSION["Username"] ?></span></p>
        </div>

        <div class="playerGender">
            <p><strong>Gender:</strong> <span id="Gender"><?php echo $_SESSION["Gender"] ?></span></p>
        </div>

        <div class="playerAge">
            <p><strong>Age:</strong> <span id="Age"><?php echo $_SESSION["Age"] ?></span></p>
        </div>

        <div class="playerAddress">
            <p><strong>Address:</strong> <span id="Address"><?php echo $_SESSION["Address"] ?></span></p>
        </div>
    </div>

    <a href="test.php">Go Back</a>
</body>
</html>
