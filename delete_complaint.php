<?php
require 'connection.php';
session_start();
if (!isset($_SESSION["email"])) {
    header('location: login.php');
}
$id = $_GET['id'];
$email = $_SESSION['email'];
$delete_query = "delete from complaint where id = '$id' and email = '$email'";
if ($con->query($delete_query) === TRUE) {
    header("location: view_complaint.php");
} else {
    header("location: view_complaint.php");
}

$con->close();
?>