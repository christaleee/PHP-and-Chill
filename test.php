
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
                <input type="radio" id="Gender" name="Gender" value="Male" required />
                <label for="female">Female</label>
                <input type="radio" id="Gender" name="Gender" value="Female"  required />
            </div>
            <div class="registrationInputsContainer">
                <!-- <label for="age">Age:</label> -->
                <input type="number" id="Age" name="Age" placeholder="Age" required />
            </div>
            <div class="registrationInputsContainer">
                <!-- <label for="age">Age:</label> -->
                <input type="text" id="Address" name="Address" placeholder="Address" required />
            </div>
        </div>

        <button type="submit" onclick="validateForm()">Register now</button>

       
    </form>

    <script>
        function validateForm() {
            var fname = document.getElementById("Fname").value.trim();
            var lname = document.getElementById("Lname").value.trim();
            var Uname = document.getElementById("Uname").value.trim();
            var Age = document.getElementById("Age").value.trim();
            var Address = document.getElementById("Address").value.trim();

            var Gender = document.querySelector('input[name="Gender"]:checked');


            if (fname === "" || lname === "" || Uname === "" || Gender === "" || Age === "" || Address === "" ) {
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

            //  for gender
             if (!Gender) {
                alert("Please select your gender!");
                return;
            }
            Gender = Gender.value;
        
            // Ensure Age is a valid number
            let isNumber = true;
            for (let i = 0; i < Age.length; i++) {
                if (Age[i] < "0" || Age[i] > "9") {
                    isNumber = false;
                    break;
                }
            }

            if (!isNumber || Age <= 0) {
                alert("Error: Age must be a valid positive number!");
                return;
            }
            

            // Show confirmation alert
            if (confirm(`Confirm submission:\n\nName: ${fname}" "${lname}\nGender ${Gender}\nAge: ${Age}\nAddress: ${Address}\n\nProceed to Regiter?`)) {
                // Store data in localStorage
                localStorage.setItem("Name", fname + " " + lname);
                localStorage.setItem("Username" , Uname);
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
