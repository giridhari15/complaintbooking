<?php
require 'connection.php';
session_start();
if (!isset($_SESSION["email"])) {
    header('location: login.php');
}

$email = $_SESSION["email"];
$subject = $_POST["subject"];
$description = $_POST["description"];
$register_complaint_query = "insert into complaint (email, subject, description) values ('$email', '$subject', '$description');";

if ($con->query($register_complaint_query) === TRUE) {
    header("location: view_complaint.php");
} else {
    // header('location: product.php?signup_success=You have Registered Successfully');
}
$con->close();
?>