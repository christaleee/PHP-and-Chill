<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; }
        img { max-width: 150px; border-radius: 50%; margin-top: 10px; }
    </style>
</head>
<body>

    <h2>Profile Page</h2>

    <?php
    session_start();

    if (isset($_SESSION["profilePic"])) {
        echo "<img src='" . $_SESSION["profilePic"] . "' alt='Profile Picture'>";
    } else {
        echo "<p>No profile picture uploaded.</p>";
    }
    ?>

    <br><br>
    <a href="test3.php">Upload New Picture</a>

</body>
</html>
