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
    header("Location: test2.php");
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
    <link rel="stylesheet" href="test.css">
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

    <form action="test.php" method="POST" onsubmit="return validateForm();">
        <div>
            <label for="firstName" class="firstName">First Name:</label>
            <input id="Fname" type="text" name="Fname" placeholder="(Ex. Cristian)">
            <br><span id="errorFname" class="error-message"></span>
        </div>

        <div>
            <label for="lastName" class="lastName">Last Name:</label>
            <input id="Lname" type="text" name="Lname" placeholder="(Ex. Lumaad)">
            <br><span id="errorLname" class="error-message"></span>
        </div>

        <div>
            <label for="userName" class="userName">Username:</label>
            <input id="Uname" type="text" name="Uname">
            <br><span id="errorUname" class="error-message"></span>
        </div>

        <div class="genderOption">
            <div>
                <label>Gender:</label>&nbsp;
                <label for="male">Male</label>
                <input type="radio" id="Gender" name="Gender" value="Male" required />
                <label for="female">Female</label>
                <input type="radio" id="Gender" name="Gender" value="Female"  required />
                <br><span id="errorGender" class="error-message"></span>
            </div>
        </div>

        <div>
            <label for="age" class="age">Age:</label>
            <input type="number" id="Age" name="Age">
            <br><span id="errorAge" class="error-message"></span>
        </div>
        <div class="registrationInputsContainer">
            <label for="Address" class="Address">Address:</label>
            <input type="text" id="Address" name="Address"  required />
            <br><span id="errorAddress" class="error-message"></span>
        </div>

    </form>
    <a href="#" id="registrationButton" style="--clr:#c51a1a" onclick="validateForm()"><span>REGISTER</span><i></i></a>
    <br><span id="errorAll" class="error-message"></span>
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

    
// -----------------------------------------------------------------------------------------------------------------------------------------------

    var containError = false;

        if (fname === "" || lname === "" || Uname === "" || Gender === "" || Age === "" || Address === "" ) {
            document.getElementById("errorAll").innerText = "Error: All fields are required!";
            containError = true;
            return;
        }

        // pang Capitalization
        if (
        fname.charAt(0) !== fname.charAt(0).toUpperCase() )
         {
            fname = fname.charAt(0).toUpperCase() + fname.slice(1);
            // document.getElementById("errorFname").innerText = "Error: First letter must be capitalized!";
            // containError = true;
         }
         if(fname <= fname.charAt(20)){
            document.getElementById("errorFname").innerText = "Error: You have exceeded the input limit!"
         }
         if(lname.charAt(0) !== lname.charAt(0).toUpperCase()){
            lname = lname.charAt(0).toUpperCase() + lname.slice(1);
            // document.getElementById("errorLname").innerText = "Error: First letter must be capitalized!";
            // return;
         }
        //  pang gender
         if (!Gender) {
            document.getElementById("errorGender").innerText = "Error: Please select your gender!";
            containError = true; 
            return;
        }
        Gender = Gender.value;
    
        // number checker 
        let isNumber = true
        for (let i = 0; i < Age.length; i++) {
            if (Age[i] < "0" || Age[i] > "9") {
                isNumber = false;
                break;
            }
        }

        if (!isNumber || Age <= 0) {
            document.getElementById("errorAge").innerText = "Error: Age must be a valid positive number!";
            return;
            containError = true;
        }

        if(Age > 125){
            document.getElementById("errorAge").innerText = "Error: You have exceeded the age limit";
            containError = true;
            return;
        }
        
        if (containError){
            return;
        }
        var confirmation = confirm(`Confirm submission:\n\nName: ${fname} ${lname}\nUsername: ${Uname}\nGender: ${Gender}\nAge: ${Age}\nAddress: ${Address}\n\nProceed to Register?`);

return confirmation;

        // // Show confirmation alert
        // if (confirm(`Confirm submission:\n\nName: ${fname} ${lname}\nUsername: ${Uname}\nGender ${Gender}\nAge: ${Age}\nAddress: ${Address}\n\nProceed to Register?`)) {
        //     // Store data in localStorage
        //     localStorage.setItem("Name", fname + " " + lname);
        //     localStorage.setItem("Username" , Uname);
        //     localStorage.setItem("Gender", Gender);
        //     localStorage.setItem("Age", Age);
        //     localStorage.setItem("Address", Address);
            

        //     // Redirect to new page
            window.location.href = "test2.php";
        
    }
      // Assign validation function to the register button
      document.querySelector("a[onclick='validateForm()']").onclick = validateForm;
});
</script>

</body>
</html>