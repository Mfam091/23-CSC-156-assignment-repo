<?php
$conn=mysqli_connect("localhost", "root", "", "form_registration_db");
if (!$conn){
    die("connection failed: " .mysqli_conect_error());
}
echo "connected successfully.";
?>