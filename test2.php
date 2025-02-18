<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="player_details_page.css">
    <title>Crimson Legacy</title>
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

        <div class="playerDetailsContainer">
            <div class="playerDetailsBar">
                <h1> Player Details </h1>
            </div>

            <div class="playerDetails">
                <div class="playerFName">
                    <p><strong>First Name:</strong><span id="Fname"></span></p>
                </div>

                <div class="playerLName">
                    <p><strong>Last Name:</strong><span id="Fname"></span></p>
                </div>

                <div class="playerUsername">
                    <p><strong>UserName:</strong><span id="Uname"></span></p>
                </div>

                <div class="playerGender">
                    <p><strong>Gender:</strong><span id="Gender"></span></p>
                </div>

                <div class="playerAge">
                    <p><strong>Age:</strong><span id="Age"></span></p>
                </div>

                <div class="playerAddress">
                    <p><strong>Address:</strong><span id="Address"></span></p>
                </div>

                <div class="playerAssignedClass">
                    <h2>ASSIGNED CLASS: <span id="Class"></span></h2>
                </div>
            </div>
        </div>
    </div>

                        
    <script>
        const a = document.querySelector('.loginButton');
        a.addEventListener('click', () => {
            alert('Logging in...');
        });

        document.addEventListener("DOMContentLoaded", function(){
            const Fname =localStorage.getItem("Fname");
            const Lname =localStorage.getItem("Lname");
            const Uname =localStorage.getItem("Uname");
            const Gender = localStorage.getItem("Gender");
            const Age = localStorage.getItem("Age");
            const Address = localStorage.getItem("Address");

            document.getElementById("Fname").innerText = Fname;
            document.getElementById("Lname").innerText = Lname;
            document.getElementById("Uname").innerText = Uname;
            document.getElementById("Gender").innerText = Gender;
            document.getElementById("Age").innerText = Age;
            document.getElementById("Address").innerText = Address;
            
            const phpClass = "<?php echo $class; ?>"
            document.getElementById("Class").innerText = phpClass;
        });
    </script>
</div>
</div>
</body>


</html>