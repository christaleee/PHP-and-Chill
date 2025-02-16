<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submitted Data</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; }
    </style>
</head>
<body>

    <h2>Submitted Data</h2>
    <p id="output"></p>
    <button onclick="goBack()">Go Back</button>

    <script>
        // Retrieve stored data
        let name = localStorage.getItem("name");
        let Age = localStorage.getItem("age");

        if (name && Age) {
            document.getElementById("output").innerHTML = `<strong>Name:</strong> ${Uname} <br> <strong>Email:</strong> ${Age}`;
        } else {
            document.getElementById("output").innerHTML = "No data found!";
        }

        function goBack() {
            window.location.href = "test.php"; // Go back to form
        }
    </script>

</body>
</html>
