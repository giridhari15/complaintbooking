<?php
require 'connection.php';
session_start();
if (!isset($_SESSION["userid"])) {
    header('location: supreme.php');
}
$userid = $_SESSION["userid"];
$id = $_GET['id'];
$delete_query = "delete from complaint where id = '$id'";
if ($con->query($delete_query) === TRUE) {
    header("location: gokuldham_office.php");
} else {
    header("location: gokuldham_office.php");
}

$con->close();
?>