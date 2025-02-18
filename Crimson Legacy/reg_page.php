<?php
session_start(); 

if (!isset($_SESSION["Name"])) {
    echo "No player data found. Please register first.";
    exit();
}

// stored session values
$name = $_SESSION["Name"];
$username = $_SESSION["Username"];
$gender = $_SESSION["Gender"];
$age = $_SESSION["Age"];
$address = $_SESSION["Address"];
$assignedClass = $_SESSION["Class"]; 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reg_page.css">
    <title>Crimson Legacy</title>
</head>

<body>
    <div class="wrapper">
    <div class="backgroundContainer">
        <div class="bubbleBackground">
            <span style="--i:30;"></span>
            <span style="--i:24;"></span>
            <span style="--i:33;"></span>
            <span style="--i:19;"></span>
            <span style="--i:37;"></span>
            <span style="--i:20;"></span>
            <span style="--i:41;"></span>
            <span style="--i:18;"></span>
            <span style="--i:36;"></span>
            <span style="--i:21;"></span>
            <span style="--i:48;"></span>
            <span style="--i:20;"></span>
            <span style="--i:18;"></span>
            <span style="--i:39;"></span>
            <span style="--i:27;"></span>
            <span style="--i:39;"></span>
            <span style="--i:13;"></span>
            <span style="--i:27;"></span>
            <span style="--i:17;"></span>
            <span style="--i:31;"></span>
            <span style="--i:24;"></span>
            <span style="--i:28;"></span>
            <span style="--i:19;"></span>
            <span style="--i:39;"></span>
            <span style="--i:20;"></span>
            <span style="--i:21;"></span>
            <span style="--i:38;"></span>
            <span style="--i:16;"></span>
            <span style="--i:21;"></span>
            <span style="--i:36;"></span>
            <span style="--i:20;"></span>
            <span style="--i:27;"></span>
            <span style="--i:20;"></span>
            <span style="--i:13;"></span>
            <span style="--i:43;"></span>
            <span style="--i:17;"></span>
            <span style="--i:16;"></span>
            <span style="--i:31;"></span>
            <span style="--i:45;"></span>
            <span style="--i:19;"></span>
            <span style="--i:20;"></span>
            <span style="--i:27;"></span>
            <span style="--i:20;"></span>
            <span style="--i:13;"></span>
            <span style="--i:42;"></span>
            <span style="--i:29;"></span>
            <span style="--i:32;"></span>
            <span style="--i:20;"></span>
            <span style="--i:42;"></span>
            <span style="--i:17;"></span>
            <span style="--i:33;"></span>
            <span style="--i:24;"></span>
            <span style="--i:42;"></span>
            <span style="--i:19;"></span>
            <span style="--i:28;"></span>
            <span style="--i:17;"></span>
            <span style="--i:25;"></span>
            <span style="--i:31;"></span>
            <span style="--i:46;"></span>
            <span style="--i:33;"></span>
            <span style="--i:19;"></span>
            <span style="--i:37;"></span>
            <span style="--i:20;"></span>
            <span style="--i:41;"></span>
            <span style="--i:18;"></span>
            <span style="--i:36;"></span>
            <span style="--i:21;"></span>
            <span style="--i:48;"></span>
            <span style="--i:20;"></span>
            <span style="--i:21;"></span>
            <span style="--i:36;"></span>
            <span style="--i:20;"></span>
            <span style="--i:27;"></span>
            <span style="--i:20;"></span>
            <span style="--i:13;"></span>
            <span style="--i:29;"></span>
            <span style="--i:32;"></span>
            <span style="--i:20;"></span>
            <span style="--i:42;"></span>
            <span style="--i:17;"></span>
        </div>
    </div>

    <div class="successfulRegistrationContainer">
        <div class="registrationSuccessfulBox">
          <h1>REGISTRATION SUCCESSFUL</h1>
        </div>
        <p class="welcomeMessage">
    WELCOME, <?php echo isset($_SESSION["Username"]) ? htmlspecialchars($_SESSION["Username"]) : "Guest"; ?>
</p>

      </div>
        </div>
    </div>
    <script>
        setTimeout(function() {
            window.location.href = "player_details_page.php";
        }, 5000); 
    </script>
    

</body>

</html>