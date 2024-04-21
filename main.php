<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Prepare data for insertion
    $fullname = $_POST['fullname'];
    $nickname = $_POST['nickname'];
    $age = $_POST['age'];
    $city = $_POST['city'];
    $mobile_number = $_POST['mobile_number'];
    $facebook = $_POST['facebook'];
    $address = $_POST['address'];
    $paymentMethod = $_POST['paymentMethod'];
    $gcashPayment = isset($_POST['gcashPayment']) ? $_POST['gcashPayment'] : null; // Check if GCash proof was uploaded

    // SQL to insert data into the database
    $sql = "INSERT INTO registrants (fullname, nickname, age, city, mobile_number, facebook, address, payment_method, gcash_proof)
            VALUES ('$fullname', '$nickname', '$age', '$city', '$mobile_number', '$facebook', '$address', '$paymentMethod', '$gcashPayment')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<form action="main.php" method="post">
