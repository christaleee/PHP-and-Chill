<?php
session_start(); // Start session before anything else

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = htmlspecialchars($_POST["Fname"]);
    $lname = htmlspecialchars($_POST["Lname"]);
    $username = htmlspecialchars($_POST["Uname"]); // Fixed: Use "Uname" instead of "Username"
    $gender = htmlspecialchars($_POST["Gender"]);
    $age = intval($_POST["Age"]);
    $address = htmlspecialchars($_POST["Address"]);

    // Store data in session
    $_SESSION["Name"] = $fname . " " . $lname;
    $_SESSION["Username"] = $username;
    $_SESSION["Gender"] = $gender;
    $_SESSION["Age"] = $age;
    $_SESSION["Address"] = $address;

    // Redirect to player details page
    header("Location: test4.php");
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
    <!-- <link rel="stylesheet" href="player_form.css"> -->
</head>

<body>
    <div class="wrapper">
        <div class="backgroundContainer">
            <div class="bubbleBackground">
                <!-- Add your bubbles styling here -->
            </div>
        </div>

        <div class="playerRegistrationContainer">
            <div class="playerRegistrationBar">
                <h1>Player Registration</h1>
            </div>
            <form action="test3.php" method="POST">
                <div>
                    <label for="firstName" class="firstName">First Name:</label>
                    <input class="firstNameInput" id="Fname" type="text" name="Fname" placeholder="Juan">
                </div>
                <br><span id="errorFname" class="error-message"></span>

                <div>
                    <label for="lastName" class="lastName">Last Name:</label>
                    <input class="lastNameInput" id="Lname" type="text" name="Lname" placeholder="Dela Cruz">
                </div>
                <br><span id="errorLname" class="error-message"></span>

                <div>
                    <label for="userName" class="userName">Username:</label>
                    <input class="userNameInput" id="Uname" type="text" name="Uname">
                </div>
                <br><span id="errorUname" class="error-message"></span>

                <div class="genderOption">
                    <div>
                        <label class="genderLabel">Gender:</label>
                        <label for="male">Male</label>
                        <input type="radio" id="Gender" name="Gender" value="Male" required />
                        <label for="female">Female</label>
                        <input type="radio" id="Gender" name="Gender" value="Female" required />
                    </div>
                </div>
                <br><span id="errorGender" class="genderErrorMessage"></span>

                <div>
                    <label for="age" class="age">Age:</label>
                    <input class="ageInput" type="number" id="Age" name="Age" inputmode="numeric">
                </div>
                <br><span id="errorAge" class="error-message"></span>

                <div class="registrationInputsContainer">
                    <label for="Address" class="Address">Address:</label>
                    <textarea class="addressInput" style="resize:none;overflow:hidden" id="Address" name="Address" required></textarea>
                </div>
                <br><span id="errorAddress" class="error-message"></span>

                
                <a href="#" id="registrationButton" style="--clr:#c51a1a"><span>REGISTER</span><i></i></a>
                <br><span id="errorAll" class="error-message"></span>
            </form>
        </div>
    </div>

    <script>
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

            function validateForm() {
                var fname = document.getElementById("Fname").value.trim();
                var lname = document.getElementById("Lname").value.trim();
                var Uname = document.getElementById("Uname").value.trim();
                var Age = document.getElementById("Age").value.trim();
                var Address = document.getElementById("Address").value.trim();
                var Gender = document.querySelector('input[name="Gender"]:checked');

                var containError = false;

                if (fname === "" || lname === "" || Uname === "" || !Gender || Age === "" || Address === "") {
                    document.getElementById("errorAll").innerText = "Error: All fields are required!";
                    containError = true;
                }

                if (containError) {
                    return;
                }

                var confirmation = confirm(`Confirm submission:\n\nName: ${fname} ${lname}\nUsername: ${Uname}\nGender: ${Gender.value}\nAge: ${Age}\nAddress: ${Address}\n\nProceed to Register?`);

                if (confirmation) {
                    // Proceed with form submission
                    document.querySelector("form").submit();  // Submitting the form
                }
            }
        });
    </script>

</body>
</html>
