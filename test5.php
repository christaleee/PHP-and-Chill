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

<form action="test5.php" method="POST" onSubmit="return confirmSubmission();">
    <div>
        <label for="firstName">First Name:</label>
        <input type="text" id="Fname" name="Fname" placeholder="Juan" required>
    </div>
    
    <div>
        <label for="lastName">Last Name:</label>
        <input type="text" id="Lname" name="Lname" placeholder="Dela Cruz" required>
    </div>

    <div>
        <label for="userName">Username:</label>
        <input type="text" id="Uname" name="Uname" required>
    </div>

    <div class="genderOption">
        <label>Gender:</label>
        <label for="male">Male</label>
        <input type="radio" id="male" name="Gender" value="Male" required>
        <label for="female">Female</label>
        <input type="radio" id="female" name="Gender" value="Female" required>
    </div>

    <div>
        <label for="age">Age:</label>
        <input type="number" id="Age" name="Age" min="1" max="125" required>
    </div>

    <div>
        <label for="Address">Address:</label>
        <textarea id="Address" name="Address" required></textarea>
    </div>

    <button type="submit">REGISTER</button>
</form>
<script>function confirmSubmission() {
    var fname = document.getElementById("Fname").value.trim();
    var lname = document.getElementById("Lname").value.trim();
    var Uname = document.getElementById("Uname").value.trim();
    var Age = document.getElementById("Age").value.trim();
    var Address = document.getElementById("Address").value.trim();
    var Gender = document.querySelector('input[name="Gender"]:checked');

    if (!Gender) {
        alert("Please select your gender.");
        return false;
    }
    
    if (isNaN(Age) || Age <= 0 || Age > 125) {
        alert("Please enter a valid age (1-125).");
        return false;
    }

    Gender = Gender.value;

    var confirmation = confirm(`Confirm submission:\n\nName: ${fname} ${lname}\nUsername: ${Uname}\nGender: ${Gender}\nAge: ${Age}\nAddress: ${Address}\n\nProceed to Register?`);

    return confirmation;
}
</script>

