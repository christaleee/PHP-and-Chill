<?php
session_start(); 

if(!isset($_SESSION['form_data'])){
    echo "No data available!";
    exit();
}
$formData = $_SESSION['form_data'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="player_details_page.css">
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

        <?php if(isset($_SESSION['form_data']))?>
        <div class="playerDetailsContainer">
            <div class="playerDetailsBar">
                <h1> Player Details </h1>
            </div>

            <div class="playerDetails">
                <div class="playerFName">
                    <p><strong>Name:</strong> <?php echo htmlspecialchars($formData['Fname'].' '.$formData['Lname']); ?></p>
                </div>

                <div class="playerUsername">
                    <p><strong>Username:</strong> <?php echo htmlspecialchars($formData['Uname']); ?></p>
                </div>

                <div class="playerGender">
                    <p><strong>Gender:</strong> <?php echo htmlspecialchars($formData['Gender']); ?></p>
                </div>

                <div class="playerAge">
                    <p><strong>Age:</strong> <?php echo htmlspecialchars($formData['Age']); ?></p>
                </div>

                <div class="playerAddress">
                    <p><strong>Address:</strong> <?php echo htmlspecialchars($formData['Address']); ?></p>
                </div>
            </div>

            <!-- <div class="playerAssignedClass">
                <h2>ASSIGNED CLASS: <?php echo isset($formData['Class']) ? htmlspecialchars($formData['Class']) : 'Not Assigned'; ?></h2>
            </div> -->
            <div class="playerAssignedClass">
                <p><strong>ASSIGNED CLASS:</strong> <?php echo htmlspecialchars($formData['Class']); ?></p>
            </div>

            <!-- <form action="update_player.php" method="POST">
                <button type="submit" name="update">Update</button>
            </form>
            <form action="delete_player.php" method="POST">
                <button type="submit" name="delete">Delete</button>
            </form> -->
        </div>
    </div>
</body>
</html>