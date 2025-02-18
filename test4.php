<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <!-- <link rel="stylesheet" href="player_form.css"> -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
   
    <form>
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
            <input class="userNameInput" id="Uname" type="text" name="Username" >
        </div>
        <br><span id="errorUname" class="error-message"></span>

        <div class="genderOption">
            <div>
                <label class="genderLabel">Gender:</label>
                <label for="male">Male</label>
                <input type="radio" id="Gender" name="Gender" value="Male" required />
                <label for="female">Female</label>
                <input type="radio" id="Gender" name="Gender" value="Female"  required />
            </div>
        </div>
        <br><span id="errorGender" class="genderErrorMessage"></span>

        <div>
            <label for="age" class="age">Age:</label>
            <input class="ageInput" type="number" id="Age" name="Age">
        </div>
        <br><span id="errorAge" class="error-message"></span>

        <div class="registrationInputsContainer">
            <label for="Address" class="Address">Address:</label>
            <textarea class="addressInput" style="resize:none;overflow:hidden"id="Address" name="Address"  required> </textarea>
        </div>
        <br><span id="errorAddress" class="error-message"></span>

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
    
        window.validateForm = function() {
            var fname = document.getElementById("Fname").value.trim();
            var lname = document.getElementById("Lname").value.trim();
            var Uname = document.getElementById("Uname").value.trim();
            var Age = document.getElementById("Age").value.trim();
            var Address = document.getElementById("Address").value.trim();
            var Gender = document.querySelector('input[name="Gender"]:checked');
    
    // -----------------------------------------------------------------------------------------------------------------------------------------------
    
            var containError = false;
    
            if (fname === "" || lname === "" || Uname === "" || Gender === "" || Age === "" || Address === "") {
                document.getElementById("errorAll").innerText = "Error: All fields are required!";
                return;
                containError = true;
            }
    
            // pang Capitalization
            if (fname.charAt(0) !== fname.charAt(0).toUpperCase()) {
                fname = fname.charAt(0).toUpperCase() + fname.slice(1);
            }
            
            if(fname <= fname.charAt(20)){
                document.getElementById("errorFname").innerText = "Error: You have exceeded the input limit!"
                return;
            }
            
            if(lname.charAt(0) !== lname.charAt(0).toUpperCase()){
                lname = lname.charAt(0).toUpperCase() + lname.slice(1);
            }
    
            // pang gender
            if (!Gender) {
                document.getElementById("errorGender").innerText = "Please select your gender!";
                return;
                containError = true;
            }
            Gender = Gender.value;
    
            // number checker 
            let isNumber = true;
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
                return;
                containError = true;
            }
            
            if (containError){
                return;
            }
    
            // Show Sweet Alert confirmation instead of basic confirm
            Swal.fire({
                title: 'Confirm Registration',
                html: `
                    <div style="text-align: left">
                        <p>Name: ${fname} ${lname}</p>
                        <p>Username: ${Uname}</p>
                        <p>Gender: ${Gender}</p>
                        <p>Age: ${Age}</p>
                        <p>Address: ${Address}</p>
                    </div>
                `,
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, register!',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Show loading state
                    Swal.fire({
                        title: 'Processing...',
                        html: 'Please wait while we process your registration.',
                        allowOutsideClick: false,
                        didOpen: () => {
                            Swal.showLoading();
                        }
                    });
    
                    // Perform AJAX request
                    $.ajax({
                        url: 'your_registration_endpoint.php',
                        method: 'POST',
                        data: {
                            firstName: fname,
                            lastName: lname,
                            username: Uname,
                            gender: Gender,
                            age: Age,
                            address: Address
                        },
                        success: function(response) {
                            try {
                                const data = JSON.parse(response);
                                if (data.success) {
                                    Swal.fire({
                                        title: 'Success!',
                                        text: 'Registration completed successfully!',
                                        icon: 'success'
                                    }).then(() => {
                                        // Store data in localStorage
                                        localStorage.setItem("Name", fname + " " + lname);
                                        localStorage.setItem("Username", Uname);
                                        localStorage.setItem("Gender", Gender);
                                        localStorage.setItem("Age", Age);
                                        localStorage.setItem("Address", Address);
                                        
                                        // Redirect to new page
                                        window.location.href = "player_details_page.php";
                                    });
                                } else {
                                    throw new Error(data.message || 'Registration failed');
                                }
                            } catch (error) {
                                throw new Error('Invalid response from server');
                            }
                        },
                        error: function(xhr, status, error) {
                            Swal.fire({
                                title: 'Error!',
                                text: 'Failed to complete registration. Please try again.',
                                icon: 'error'
                            });
                        }
                    });
                }
            });
        }
    
        // Assign validation function to the register button
        document.querySelector("a[onclick='validateForm()']").onclick = validateForm;
    });
    </script>

</body>
</html>