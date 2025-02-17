<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Profile Picture</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; }
        input, button { margin: 10px; padding: 8px; }
        img { max-width: 150px; border-radius: 50%; margin-top: 10px; }
    </style>
</head>
<body>

    <h2>Upload Profile Picture</h2>

    <?php
    session_start(); // Start session to store image path

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["profilePic"])) {
        $uploadDir = "uploads/"; // Directory to store images
        $uploadFile = $uploadDir . basename($_FILES["profilePic"]["name"]);
        $imageFileType = strtolower(pathinfo($uploadFile, PATHINFO_EXTENSION));

        // Allowed file types
        $allowedTypes = ["jpg", "jpeg", "png", "gif"];

        if (in_array($imageFileType, $allowedTypes)) {
            if (move_uploaded_file($_FILES["profilePic"]["tmp_name"], $uploadFile)) {
                $_SESSION["profilePic"] = $uploadFile; // Store path in session
                echo "<p style='color:green;'>Upload successful!</p>";
            } else {
                echo "<p style='color:red;'>Upload failed!</p>";
            }
        } else {
            echo "<p style='color:red;'>Invalid file type! Only JPG, PNG, and GIF allowed.</p>";
        }
    }
    ?>

    <form action="test4.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="profilePic" accept="image/*" required><br>
        <button type="submit">Upload</button>
    </form>

    <?php
    if (isset($_SESSION["profilePic"])) {
        echo "<h3>Preview:</h3>";
        echo "<img src='" . $_SESSION["profilePic"] . "' alt='Profile Picture'>";
    }
    ?>

    <br><br>
    <a href="test4.php">Go to Profile Page</a>

</body>
</html>
