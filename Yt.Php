<?php
// Database connection
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Form data
$fullname = $_POST['fullname'];
$nickname = $_POST['nickname'];
$age = $_POST['age'];
$city = $_POST['city'];
$mobile_number = $_POST['mobile_number'];
$facebook = $_POST['facebook'];
$address = $_POST['address'];

// Insert data into database
$sql = "INSERT INTO users (fullname, nickname, age, city, mobile_number, facebook, address) 
        VALUES ('$fullname', '$nickname', '$age', '$city', '$mobile_number', '$facebook', '$address')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
