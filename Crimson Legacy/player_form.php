<?php
session_start();
function assignedClass($Lname, $Gender) {
    $firstLetter = strtoupper(substr($Lname, 0, 1));

    if ($firstLetter >= 'A' && $firstLetter <= 'M' && $Gender == "Male") {
        return "Class A";
    } elseif ($firstLetter >= 'N' && $firstLetter <= 'Z' && $Gender == "Female") {
        return "Class B";
    } elseif ($firstLetter >= 'N' && $firstLetter <= 'Z' && $Gender == "Male") {
        return "Class C";
    } elseif ($firstLetter >= 'A' && $firstLetter <= 'M' && $Gender == "Female") {
        return "Class D";
    } else {
        return "Unassigned";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // function assignedClass($Lname, $Gender) {
    //     $firstLetter = strtoupper(substr($Lname, 0, 1));

    //     if ($firstLetter >= 'A' && $firstLetter <= 'M' && $Gender == "Male") {
    //         return "Class A";
    //     } elseif ($firstLetter >= 'N' && $firstLetter <= 'Z' && $Gender == "Female") {
    //         return "Class B";
    //     } elseif ($firstLetter >= 'N' && $firstLetter <= 'Z' && $Gender == "Male") {
    //         return "Class C";
    //     } elseif ($firstLetter >= 'A' && $firstLetter <= 'M' && $Gender == "Female") {
    //         return "Class D";
    //     } else {
    //         return "Unassigned";
    //     }
    // }
    $id = $_POST['id'] ?? null;
    $newUser = [
        'id' => $id ?: uniqid(),  // Unique identifier for each user
        'Fname' => $_POST['Fname'],
        'Lname' => $_POST['Lname'],
        'Uname' => $_POST['Uname'],
        'Gender' => $_POST['Gender'],
        'Age' => $_POST['Age'],
        'Address' => $_POST['Address'],
        'Class' => assignedClass($_POST['Lname'], $_POST['Gender'])
    ];
   

    // Ensure form_data is an array and append the new user
    if (!isset($_SESSION['form_data'])) {
        $_SESSION['form_data'] = [];
    }

   if ($id) {
        foreach ($_SESSION['form_data'] as &$user) {
            if ($user['id'] === $id) {
                $user = $newUser;
                $found = true;
                break;
            }
        }
        unset($user);
        if(!$found){
            $_SESSION['form_data'][] = $newUser;
        }
    } else {
        $_SESSION['form_data'][] = $newUser;
    }

    header("Location: reg_page.php");
    exit();
}

$editUser = null;
if (isset($_GET['update_id'])) {
    $updateId = $_GET['update_id'];
    foreach ($_SESSION['form_data'] as $user) {
        if ($user['id'] === $updateId) {
            $editUser = $user;
            break;
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="player_form.css">
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

    <div class="playerRegistrationContainer">
        <div class="playerRegistrationBar">
            <h1>Player Registration</h1>
        </div>
   
    <form action="player_form.php" method="POST" id="registrationForm" >
        <div>
            <div class="counter">
                <label for="Fname" class="firstName">First Name:</label>
                <input class="firstNameInput" id="Fname" type="text" name="Fname" maxlength="30" placeholder="Ex. Juan" value="<?=$editUser['Fname'] ?? '' ?>">
                <span class="remainingFN" id="remainingFN">30</span>
            </div>
            <span class="counter"></span>
        </div>
        <div><br><span id="errorFname" class="error-message"></span></div>

        <div>
            <div class="counter">
                <label for="Lname" class="lastName">Last Name:</label>
                <input class="lastNameInput" id="Lname" type="text" name="Lname" maxlength="30" placeholder="Ex. Dela Cruz"value="<?=$editUser['Lname'] ?? '' ?>" >
                <span class="remainingLN" id="remainingLN">30</span>
            </div>
            <span class="counter"></span>
        </div>
        <div><br><span id="errorLname" class="error-message"></span></div>

        <div>
            <div class="counter">
                <label for="Uname" class="userName">Username:</label>
                <input class="userNameInput" id="Uname" type="text" name="Uname" maxlength="20" placeholder="Ex. Juan_DelaCruz1" oninput="this.value = this.value.replace(/[^A-Za-z0-9_]/g, '')" value="<?=$editUser['Uname'] ?? '' ?>">
                <span class="remainingUN" id="remainingUN">20</span>
            </div>
        </div>
        <div><br><span id="errorUname" class="error-message"></span></div>

        <div class="genderOption">
    <div>
        <label class="genderLabel">Gender:</label>
        <input type="radio" id="Male" name="Gender" value="Male" value="<?=$editUser['Gender'] ?? '' ?>" required />
        <label for="Male">Male</label>
        <input type="radio" id="Female" name="Gender" value="Female" value="<?=$editUser['Gender'] ?? '' ?>" required />
        <label for="Female">Female</label>
    </div>
</div>
        <br><span id="errorGender" class="error-message"></span>

        <div>
            <label for="Age" class="age">Age:</label>
            <input class="ageInput" type="text" id="Age" name="Age" maxlength="2"  placeholder="Only accepts 1-99" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/^0(?!$)/, '')" value="<?= $editUser['Age'] ?? '' ?>" ?>
        </div>
        <br><span id="errorAge" class="error-message"></span>

        <div class="registrationInputsContainer">
            <label for="Address" class="Address">Address:</label>
            <textarea class="addressInput" style="resize:none;overflow:hidden"id="Address" name="Address" maxlength="80" value="<?= $editUser['Age'] ?? '' ?>" ></textarea>
            <span class="remainingAdd" id="remainingAdd">80</span>
        </div>

        <br><span id="errorAddress" class="error-message"></span> 
        <button type="submit" id="registrationButton" style="--clr:#c51a1a" onclick="validateForm(event);">
         <span><?= isset($editUser) ? 'UPDATE' : 'REGISTER' ?></span><i></i>
        </button>
    </form>


<script>
    function validateForm(event) {
        event.preventDefault(); // Prevent form from submitting 

        var fname = document.getElementById("Fname").value.trim();
        var lname = document.getElementById("Lname").value.trim();
        var Uname = document.getElementById("Uname").value.trim();
        var Age = document.getElementById("Age").value.trim();
        var Address = document.getElementById("Address").value.trim();
        var Gender = document.querySelector('input[name="Gender"]:checked');

        var errorFname = document.getElementById("errorFname");
        var errorLname = document.getElementById("errorLname");
        var errorUname = document.getElementById("errorUname");
        var errorAge = document.getElementById("errorAge");
        var errorAddress = document.getElementById("errorAddress");
        var errorGender = document.getElementById("errorGender");

        // Clearing previous errors sa mga input
        errorFname.innerText = "";
        errorLname.innerText = "";
        errorUname.innerText = "";
        errorAge.innerText = "";
        errorAddress.innerText = "";
        errorGender.innerText = "";

        let valid = true;

        if (fname === "") {
            errorFname.innerText = "First name is required.";
            valid = false;
        }
        if (lname === "") {
            errorLname.innerText = "Last name is required.";
            valid = false;
        }
        if (Uname === "") {
            errorUname.innerText = "Username is required.";
            valid = false;
        }
        
        if (!Gender) {
            errorGender.innerText = "Please select your gender.";
            valid = false;
        }
        if (Age === "" || isNaN(Age) || Age <= 0 || Age > 125) {
            errorAge.innerText = "Age must be between 1 and 99.";
            valid = false;
        }
        if (Address === "") {
            errorAddress.innerText = "Address is required.";
            valid = false;
        }

        // passes submission kung valid
        if (valid) {
            document.getElementById("registrationForm").submit();
        }
    }

    document.addEventListener("DOMContentLoaded", function() {
        var form = document.getElementById("registrationForm");
        form.addEventListener("submit", validateForm);
    });


    //COUNTER
    const inputFirstName = document.getElementById("Fname") 
    const remainingFirstName = document.getElementById("remainingFN")
    const inputLastName = document.getElementById("Lname") 
    const remainingLastName = document.getElementById("remainingLN")
    const inputUserName = document.getElementById("Uname") 
    const remainingUserName = document.getElementById("remainingUN")
    const inputAddress = document.getElementById("Address") 
    const remainingAddress = document.getElementById("remainingAdd")

    const FN = () => {
        updateCounterFN()
    }

    inputFirstName.addEventListener("keyup", FN)
    updateCounterFN()

    function updateCounterFN(){
        remainingFirstName.innerText = inputFirstName.getAttribute("maxlength") - inputFirstName.value.length
    }

    const LN = () => {
        updateCounterLN()
    }

    inputLastName.addEventListener("keyup", LN)
    updateCounterLN()

    function updateCounterLN(){
        remainingLastName.innerText = inputLastName.getAttribute("maxlength") - inputLastName.value.length
    }

    const UN = () => {
        updateCounterUN()
    }

    inputUserName.addEventListener("keyup", UN)
    updateCounterUN()

    function updateCounterUN(){
        remainingUserName.innerText = inputUserName.getAttribute("maxlength") - inputUserName.value.length
    }

    const A = () => {
        updateCounterA()
    }

    inputAddress.addEventListener("keyup", A)
    updateCounterA()

    function updateCounterA(){
        remainingAddress.innerText = inputAddress.getAttribute("maxlength") - inputAddress.value.length
    }
</script>
</body>
</html>