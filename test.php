
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; }
        input, button { margin: 10px; padding: 8px; }
    </style>
</head>
<body>
        <form id="userForm">
        <div class="registration box">
            <h2>Player Registration</h2>
        </div>
        <form>
        <div class="registrationInputsContainer">
            <!-- <label for="first-name">First Name:</label> -->
            <input type="text" id="Fname" name="Fname" placeholder="First Name" required />
        </div>

        <div class="registrationInputsContainer">
            <!-- <label for="last-name">Last Name:</label> -->
            <input type="text" id="Lname" name="Lname" placeholder="Last Name" required />
        </div>

        <div class="registrationInputsContainer">
            <!-- <label for="username">UserName:</label> -->
            <input type="text" id="Uname" name="Username" placeholder="Username" required />
        </div>

        <div class="regRow">
            <div class="registrationInputsContainer">
                <!-- <label for="gender">Gender:</label> -->
                <label for="male">Male</label>
                <input type="radio" id="Gender" name="Gender" required />
                <label for="female">Female</label>
                <input type="radio" id="Gender" name="Gender"  required />
            </div>
            <div class="registrationInputsContainer">
                <!-- <label for="age">Age:</label> -->
                <input type="number" id="Age" name="Age" placeholder="Age" required />
            </div>
        </div>

        <button type="submit" onclick="validateForm()">Register now</button>

       
    </form>

    <script>
        function validateForm() {
            var fname = document.getElementById("Fname").value.trim();
            var lname = document.getElementById("Lname").value.trim();
            var Gender = document.getElementById("Gender").value.trim();
            var Age = document.getElementById("Age").value.trim();
            var Address = document.getElementById("Address").value;

            if (fname === "" || lname === "" || Gender === "" || Age === "" || Address === "" ) {
                alert("All fields are required!");
                return;
            }
            // for Capitalization
            if (
            fname.charAt(0) !== fname.charAt(0).toUpperCase() || 
            lname.charAt(0) !== lname.charAt(0).toUpperCase()
             )
             {
                alert("First letters of firstname and lastname must be capitalized")
                return;
             }

             Age.addEventListener("input", function() {
                let newValue = "";
                for (let i = 0; i < this.value.length; i++) {
                 if (this.value[i] >= "0" && this.value[i] <= "9") {
                    newValue += this.value[i]; // Keep only numbers
                    }
                }

                if (this.value !== newValue) {
                alert("Error: Age must contain only numbers!"); // Show error if letters are entered
                 }

                 this.value = newValue;
                });

            // Show confirmation alert
            if (confirm(`Confirm submission:\n\nName: ${fname}" "${lname}\nGender ${Gender}\nAge: ${Age}\nAddress: ${Address}\n\nProceed to Regiter?`)) {
                // Store data in localStorage
                localStorage.setItem("Name", fname + " " + lname);
                localStorage.setItem("Gender", Gender);
                localStorage.setItem("Age", Age);
                localStorage.setItem("Address", Address);

                // Redirect to new page
                window.location.href = "test2.php";
            }
        }
    </script>

</body>
</html>
