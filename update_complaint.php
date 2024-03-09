<?php
require 'connection.php';
session_start();
if (!isset($_SESSION["email"])) {
    header('location: login.php');
}

$email=$_SESSION["email"];
$id = $_POST['id'];
$subject = $_POST['subject'];
$description = $_POST['description'];

$update_query = "update complaint set subject = '$subject', description = '$description' where id = '$id' and email = '$email'";
if ($con->query($update_query) === TRUE) {
    header("location: view_complaint.php");
} else {
    header("location: view_complaint.php");
}
?>