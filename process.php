<?php
include 'database.php';

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "student_register_db";

// $conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->error) {
    die("Connection failed: " .$conn->connect_error);
}

$full_name = $_POST['full_name'];
$email = $_POST['email'];
$department = $_POST['department'];
$matric_number = $_POST['matric_number'];

if (empty($full_name) || empty($email) || empty($department) || empty($matric_number) ||  !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Invalid input. Please make sure all fields are filled correctly.");
}

$sql = "INSERT INTO student_data (full_name, email, department, matric_number)
        VALUES ('$full_name', '$email', '$department', ' $matric_number')";

if ($conn->query($sql) === TRUE) {
    echo "New stydent registered successfully. <br>". "<a href='view.php'>View Registered Students</a>";
} else {
    echo "Error: " .$sql . "<br>" . $conn->error;
}

$conn->close();
?>
