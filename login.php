<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - AI Yoga Assistant</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        .login-container h2 {
            margin-bottom: 20px;
            color: #333;
        }
        .login-container input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        .login-container button {
            width: 100%;
            padding: 10px;
            background: #4CAF50;
            border: none;
            color: white;
            font-size: 18px;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }
        .login-container button:hover {
            background: #388E3C;
        }
        .login-container p {
            margin-top: 10px;
        }
        .login-container a {
            color: #4CAF50;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login to AI Yoga Assistant</h2>
        <form action="" method="POST">
    <input type="text" name="Name" placeholder="Enter Name" required>
    <input type="password" name="Password" placeholder="Enter Password" required>
    <button type="submit">Register</button>
</form>

        <p>Don't have an account? <a href=" ">Sign up</a></p>
    </div>
</body>
</html>



<?php
session_start();

// If user is already logged in, show message
if (isset($_SESSION['username'])) {
    echo "<script>alert('You are already logged in!'); window.location.href='index.php';</script>";
    exit();
}
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "info_db";

// Database connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['Name'];
    $pass = $_POST['Password'];

    // Prevent SQL Injection
    $name = mysqli_real_escape_string($conn, $name);
    $pass = mysqli_real_escape_string($conn, $pass);

    // Check if username already exists
    $check_sql = "SELECT * FROM `info-nidhi` WHERE Name='$name' and Password='$pass'";
    $result = $conn->query($check_sql);

    if ($result->num_rows > 0) {
        echo "<script>alert('This user already exists!'); window.location.href='index.php';</script>";
    } else {
        // Insert new user into database
        $sql = "INSERT INTO `info-nidhi` (Name, Password) VALUES ('$name', '$pass')";
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Registration Successful!'); window.location.href='';</script>";
        } else {
            echo "<script>alert('Error: " . $conn->error . "'); window.location.href='';</script>";
        }
    }
}

$conn->close();
?>
