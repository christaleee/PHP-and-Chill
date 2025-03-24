<?php
session_start(); 
$_SESSION['form_data'] = array_values($_SESSION['form_data']);
if (!isset($_SESSION['form_data']) || empty($_SESSION['form_data'])) {
    echo "No users registered.";
    exit();
}
// Function to delete a user by ID
function DeleteUserData($arraykey) {
    if (isset($_SESSION['form_data'])) {
        foreach ($_SESSION['form_data'] as $key => $user) {
            if ($user['id'] == $arraykey) {
                unset($_SESSION['form_data'][$key]);
                $_SESSION['form_data'] = array_values($_SESSION['form_data']); // Re-index array
                break;
            }
        }
        
    }
    if (empty($_SESSION['form_data'])) {
        unset($_SESSION['form_data']); // Remove session variable
        header("Location: Welcome_page.php");
        exit();
    }

    header("Location: player_details_page.php");
    exit();
}

// Function to update a user’s first name
function UpdateUserData($arraykey, $newFirstName) {
    if (isset($_SESSION['form_data'])) {
        foreach ($_SESSION['form_data'] as $key => $user) {
            if ($user['id'] == $arraykey) {
                if($user['id'] == $arraykey){
                    $user['Fname'] = $newFirstName;
                }
                break;
            }
        }
        unset($user);
    }
    header("Location: player_details_page.php");
    exit();
}

// Initialize session data if not set
// if (!isset($_SESSION['form_data']) || !is_array($_SESSION['form_data'])) {
//     $_SESSION['form_data'] = [];
// }


// Handle delete request
if (isset($_GET['delete_id'])) {
    DeleteUserData($_GET['delete_id']);
}

if(!isset($_SESSION['form_data'])){
    echo "No data available!";
    exit();
}
// Handle update request
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update_id']) && isset($_POST['new_first_name'])) {
    UpdateUserData($_POST['update_id'], $_POST['new_first_name']);
}

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
<!-- <div class="backgroundContainer">
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
    </div> -->

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
        </div>
    </div>
    <div class="mainContainer">
        <div class="titleCenter">
        <div class="playerDetailsBar">
            <h1> Player Details </h1>
        </div>
        </div>
        <div class="playersFormat">

        <?php foreach ($_SESSION['form_data'] as $index => $user): ?>
        <div class="wrapDetails">
            <div class="playerDetailsContainer" id="player-<?php echo $index; ?>">

                <div class="playerInfo">
                <div class="nameFormat">
                    <p><strong>Name:</strong> <?= htmlspecialchars($user['Fname'].' '.$user['Lname']); ?></p>
                </div>
                    <p><strong>Username:</strong> <?= htmlspecialchars($user['Uname']); ?></p>
                    <p><strong>Gender:</strong> <?= htmlspecialchars($user['Gender']); ?></p>
                    <p><strong>Age:</strong> <?= htmlspecialchars($user['Age']); ?></p>
                <div class="addressFormat">
                    <p><strong>Address:</strong> <?= htmlspecialchars($user['Address']); ?></p>
                </div>
                    <p><strong>ASSIGNED CLASS:</strong> <?= htmlspecialchars($user['Class']); ?></p>
                </div>

                <div class="playerActions">
                    <a style="--clr:#c51a1a" href="player_details_page.php?delete_id=<?= urlencode($user['id']) ?>" onclick="return confirm('Are you sure you want to delete this user?');"><i></i><span>DELETE</span></a>
                    <a style="--clr:#c51a1a" href="player_form.php?update_id=<?= urlencode($user['id']) ?>"><i></i><span>UPDATE</span></a> 
                </div>

            </div>
        </div>
        <?php endforeach; ?>
        </div>
        <?php if (count($_SESSION['form_data']) < 4): ?> 
            <div class="addPlayer"> 
                <a class="addPlayerButton" style="--clr:#c51a1a" href="player_form.php"><i></i><span>ADD NEW PLAYER</span></a>
            </div>
        <?php endif; ?>

    </div>
    </div>
</div>
</body>
</html>