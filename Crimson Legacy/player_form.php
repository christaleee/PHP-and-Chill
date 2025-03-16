<?php
session_start();



if ($_SERVER["REQUEST_METHOD"] == "POST") {

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
    // Retrieve user input
    $Fname = $_POST['Fname'];
    $Lname = $_POST['Lname'];
    $Uname = $_POST['Uname'];
    $Gender = $_POST['Gender'];
    $Age = $_POST['Age'];
    $Address = $_POST['Address'];

    // Call the function and store result
    $assignedClass = assignedClass($Lname, $Gender);

    // Store the data in session
    $_SESSION['form_data'] = [
        'Fname' => $Fname,
        'Lname' => $Lname,
        'Uname' => $Uname,
        'Gender' => $Gender,
        'Age' => $Age,
        'Address' => $Address,
        'Class' => $assignedClass
    ];


    // $_SESSION['form_data'] = [
    //     'Fname' => $_POST['Fname'],
    //     'Lname' => $_POST['Lname'],
    //     'Uname' => $_POST['Uname'],
    //     'Gender' => $_POST['Gender'],
    //     'Age'=> $_POST['Age'],
    //     'Address' => $_POST['Address'],
    //     'Class' => $_POST['Class']
    // ];
 header("Location: reg_page.php");
 exit();
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
                <input class="firstNameInput" id="Fname" type="text" name="Fname" maxlength="30" placeholder="Ex. Juan">
                <span class="remainingFN" id="remainingFN">30</span>
            </div>
            <span class="counter"></span>
        </div>
        <div><br><span id="errorFname" class="error-message"></span></div>

        <div>
            <div class="counter">
                <label for="Lname" class="lastName">Last Name:</label>
                <input class="lastNameInput" id="Lname" type="text" name="Lname" maxlength="30" placeholder="Ex. Dela Cruz" >
                <span class="remainingLN" id="remainingLN">30</span>
            </div>
            <span class="counter"></span>
        </div>
        <div><br><span id="errorLname" class="error-message"></span></div>

        <div>
            <div class="counter">
                <label for="Uname" class="userName">Username:</label>
                <input class="userNameInput" id="Uname" type="text" name="Uname"  maxlength="20" >
                <span class="remainingUN" id="remainingUN">20</span>
            </div>
        </div>
        <div><br><span id="errorUname" class="error-message"></span></div>

        <div class="genderOption">
    <div>
        <label class="genderLabel">Gender:</label>
        <input type="radio" id="Male" name="Gender" value="Male" required />
        <label for="Male">Male</label>
        <input type="radio" id="Female" name="Gender" value="Female" required />
        <label for="Female">Female</label>
    </div>
</div>

        <div><br><span id="errorGender" class="genderErrorMessage"></span></div>

        <div>
            <label for="Age" class="age">Age:</label>
            <input class="ageInput" type="text" id="Age" name="Age" maxlength="2"  oninput="this.value = this.value.replace(/[^0-9]/g, '');">
        </div>
        <div><br><span id="errorAge" class="error-message"></span></div>

        <div class="registrationInputsContainer">
            <label for="Address" class="Address">Address:</label>
            <textarea class="addressInput" style="resize:none;overflow:hidden"id="Address" name="Address" maxlength="70" ></textarea>
            <span class="remainingAdd" id="remainingAdd">70</span>
        </div>

        <br><span id="errorAddress" class="error-message"></span> 
        <button type="submit" id="registrationButton" style="--clr:#c51a1a" onclick="validateForm(event);">
         <span>REGISTER</span><i></i>
        </button>
    </form>


<script>
    // function updateCounter(inputId, counterId) {
    //         let inputField = document.getElementById(inputId);
    //         let counter = document.getElementById(counterId);

    //         inputField.addEventListener("input", function () {
    //             counter.textContent = `${this.value.length} / ${this.maxLength}`;
    //         });
    //     }

    //     updateCounter("name", "nameCounter");
    //     updateCounter("bio", "bioCounter");
    
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