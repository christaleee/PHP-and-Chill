<?php
session_start(); 

function assignClass($lname, $gender) {
    $firstLetter = strtoupper(substr($lname, 0, 1)); // Get first letter and convert to uppercase

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
    $fname = htmlspecialchars($_POST["Fname"]);
    $lname = htmlspecialchars($_POST["Lname"]);
    $username = htmlspecialchars($_POST["Uname"]); // Fixed: Use "Uname" instead of "Username"
    $gender = htmlspecialchars($_POST["Gender"]);
    $age = intval($_POST["Age"]);
    $address = htmlspecialchars($_POST["Address"]);

    // Fix function call and assigned variable
    $assignedClass = assignClass($lname, $gender);

    // Store data in session
    $_SESSION["Name"] = $fname . " " . $lname;
    $_SESSION["Username"] = $username;
    $_SESSION["Gender"] = $gender;
    $_SESSION["Age"] = $age;
    $_SESSION["Address"] = $address;
    $_SESSION["Class"] = $assignedClass; // Corrected variable name

    // Redirect to player details page
    header("Location: player_details_page.php");
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
   
    <form action="player_form.php" method="POST"  >
        <div>
            <label for="firstName" class="firstName">First Name:</label>
            <input class="firstNameInput" id="Fname" type="text" name="Fname" placeholder="Juan" required>
        </div>
        <div><br><span id="errorFname" class="error-message"></span></div>

        <div>
            <label for="lastName" class="lastName">Last Name:</label>
            <input class="lastNameInput" id="Lname" type="text" name="Lname" placeholder="Dela Cruz" required>
        </div>
        <div><br><span id="errorLname" class="error-message"></span></div>

        <div>
            <label for="userName" class="userName">Username:</label>
            <input class="userNameInput" id="Uname" type="text" name="Uname"  required>
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
            <input class="ageInput" type="number" id="Age" name="Age" inputmode="numeric" required>
        </div>
        <div><br><span id="errorAge" class="error-message"></span></div>

        <div class="registrationInputsContainer">
            <label for="Address" class="Address">Address:</label>
            <textarea class="addressInput" style="resize:none;overflow:hidden"id="Address" name="Address"  required></textarea>
        </div>
        <br><span id="errorAddress" class="error-message"></span>

        <button type="submit" id="registrationButton" style="--clr:#c51a1a" onclick="validateForm();">
         <span>REGISTER</span><i></i>
        </button>
        <div><br><span id="errorAddress" class="error-message"></span></div>

    </form>
     <button type="submit" id="registrationButton" style="--clr:#c51a1a" onclick="validateForm();">
         <span>REGISTER</span><i></i>
        </button>

    <a href="#" id="registrationButton" style="--clr:#c51a1a" onclick="validateForm();"><span>REGISTER</span><i></i></a>
    <br><span id="errorAll" class="error-message"></span>
</div>



<script>
    // Function moved outside the DOMContentLoaded listener
    function validateForm() {
        var fname = document.getElementById("Fname").value.trim();
        var lname = document.getElementById("Lname").value.trim();
        var Uname = document.getElementById("Uname").value.trim();
        var Age = document.getElementById("Age").value.trim();
        var Address = document.getElementById("Address").value.trim();
        var Gender = document.querySelector('input[name="Gender"]:checked');
        
        var containError = false;

        if (fname === "" || lname === "" || Uname === "" || Gender === "" || Age === "" || Address === "" ) {
            document.getElementById("errorAll").innerText = "Error: All fields are required!";
            containError = true;
        }

        if (fname.charAt(0) !== fname.charAt(0).toUpperCase()) {
            fname = fname.charAt(0).toUpperCase() + fname.slice(1);
        }
        if (lname.charAt(0) !== lname.charAt(0).toUpperCase()) {
            lname = lname.charAt(0).toUpperCase() + lname.slice(1);
        }

        if (!Gender) {
            document.getElementById("errorGender").innerText = "Please select your gender!";
            
            containError = true;
            return;
        }
        Gender = Gender.value;

        let isNumber = true;
        for (let i = 0; i < Age.length; i++) {
            if (Age[i] < "0" || Age[i] > "9") {
                isNumber = false;
                break;
            }
        }

        if (!isNumber || Age <= 0) {
            document.getElementById("errorAge").innerText = "Error: Age must be a valid positive number!";
            containError = true;
            return;
        }

        if (Age > 125) {
            document.getElementById("errorAge").innerText = "Error: You have exceeded the age limit";
            containError = true;
            return;
        }

        if (containError) {
            return false;
        } 
        return true;
        
        // var confirmation = confirm(`Confirm submission:\n\nName: ${fname} ${lname}\nUsername: ${Uname}\nGender: ${Gender}\nAge: ${Age}\nAddress: ${Address}\n\nProceed to Register?`);
        // window.location.href = "player_details_page.php";
        // return confirmation;
    }

    document.addEventListener("DOMContentLoaded", function() {
        var fname = document.getElementById("Fname");
        var lname = document.getElementById("Lname");
        var Uname = document.getElementById("Uname");
        var Age = document.getElementById("Age");
        var Address = document.getElementById("Address");
        var Gender = document.getElementsByName('Gender');

        // clearing function
        function clearError(event) {
            let errorId = "error" + event.target.id;
            let errorElement = document.getElementById(errorId);
            if (errorElement) {
                errorElement.innerText = "";
            }
            document.getElementById("errorAll").innerText = ""; // Clear general error
        }

        // Attach event listeners to inputs
        fname.addEventListener("input", clearError);
        lname.addEventListener("input", clearError);
        Uname.addEventListener("input", clearError);
        Age.addEventListener("input", clearError);
        Address.addEventListener("input", clearError);

        // Attach event listeners to radio buttons
        Gender.forEach(input => {
            input.addEventListener("change", function () {
                document.getElementById("errorGender").innerText = "";
                document.getElementById("errorAll").innerText = "";
            });
        });

    });
</script>

</body>
</html>