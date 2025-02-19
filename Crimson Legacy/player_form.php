<?php
session_start();

function assignClass($lname, $gender) {
    $firstLetter = strtoupper(substr($lname, 0, 1));

    if ($firstLetter >= 'A' && $firstLetter <= 'M' && $gender == "Male") {
        return "Class A";
    } elseif ($firstLetter >= 'N' && $firstLetter <= 'Z' && $gender == "Female") {
        return "Class B";
    } elseif ($firstLetter >= 'N' && $firstLetter <= 'Z' && $gender == "Male") {
        return "Class C";
    } elseif ($firstLetter >= 'A' && $firstLetter <= 'M' && $gender == "Female") {
        return "Class D";
    } else {
        return "Unassigned";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = trim(htmlspecialchars($_POST["Fname"]));
    $lname = trim(htmlspecialchars($_POST["Lname"]));
    $username = trim(htmlspecialchars($_POST["Uname"]));
    $gender = isset($_POST["Gender"]) ? trim($_POST["Gender"]) : "";
    $age = isset($_POST["Age"]) ? intval($_POST["Age"]) : 0;
    $address = trim(htmlspecialchars($_POST["Address"]));

    // Only ensures data validation error handling is in javascript
    $assignedClass = assignClass($lname, $gender);

    $_SESSION["Name"] = $fname . " " . $lname;
    $_SESSION["Username"] = $username;
    $_SESSION["Gender"] = $gender;
    $_SESSION["Age"] = $age;
    $_SESSION["Address"] = $address;
    $_SESSION["Class"] = $assignedClass;

    header("Location: reg_page.php");
    exit();
} else {
    echo "Invalid request method.";
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
            <label for="firstName" class="firstName">First Name:</label>
            <input class="firstNameInput" id="Fname" type="text" name="Fname" placeholder="Ex. Juan" oninput=" this.value = this.value.replace(/[0-9]/g,'')";
            >
        </div>
        <div><br><span id="errorFname" class="error-message"></span></div>

        <div>
            <label for="lastName" class="lastName">Last Name:</label>
            <input class="lastNameInput" id="Lname" type="text" name="Lname" placeholder="Ex. Dela Cruz" oninput=" this.value = this.value.replace(/[0-9]/g,'')"
            >
        </div>
        <div><br><span id="errorLname" class="error-message"></span></div>

        <div>
            <label for="userName" class="userName">Username:</label>
            <input class="userNameInput" id="Uname" type="text" name="Uname" >
        </div>
        <div><br><span id="errorUname" class="error-message"></span></div>

        <div class="genderOption">
            <div>
                <label class="genderLabel">Gender:</label>
                <input type="radio" id="Male" name="Gender" value="Male" required />
                <label for="male">Male</label>
                <input type="radio" id="Female" name="Gender" value="Female" required />
                <label for="female">Female</label>
            </div>
        </div>
        <div><br><span id="errorGender" class="genderErrorMessage"></span></div>

        <div>
            <label for="age" class="age">Age:</label>
            <input class="ageInput" type="number" id="Age" name="Age" inputmode="numeric">
        </div>
        <div><br><span id="errorAge" class="error-message"></span></div>

        <div class="registrationInputsContainer">
            <label for="Address" class="Address">Address:</label>
            <textarea class="addressInput" style="resize:none;overflow:hidden"id="Address" name="Address" ></textarea>
        </div>
        <br><span id="errorAddress" class="error-message"></span>
        <button type="submit" id="registrationButton" style="--clr:#c51a1a" onclick="validateForm();">
         <span>REGISTER</span><i></i>
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
            errorAge.innerText = "Age must be between 1 and 125.";
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
</script>


</body>
</html>