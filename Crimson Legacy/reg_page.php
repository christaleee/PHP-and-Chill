<?php
session_start(); 
$latestUser = end($_SESSION['form_data']); // Get the last registered user
$newUser = $_SESSION['form_data'];
if (!isset($_SESSION["form_data"])) {
    echo "No player data found. Please register first.";
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reg_page.css">
    <title>Crimson Legacy</title>
    <style>
        .countdownMessage {
    font-size: 17px;
    font-weight: bold;
    color: #e1d9d9; 
    text-shadow: 
        0 0 5px #970000, 
        0 0 10px #970000,
        0 0 15px #970000,
        0 0 20px #970000;
    margin-top: 10px;
}
    </style>
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
        WELCOME, <?php echo isset($latestUser['Uname']) ? htmlspecialchars($latestUser['Uname']) : "Guest"; ?>
</p>
<p class="countdownMessage">Redirecting in <span id="countdown">5</span></p> 

      </div>
        </div>
    </div>
    <script>
          var seconds = 4;
        function countdown() {
            document.getElementById("countdown").innerText = seconds;
            if (seconds > 0) {
                seconds--;
                setTimeout(countdown, 1000);
            } else {
                window.location.href = "player_details_page.php";
            }
        }
        countdown(); // Start countdown
    </script>
    

</body>

</html>