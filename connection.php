<?php
$con = new mysqli("localhost", "root", "", "complaintbooking");
// Check connection
if ($con->connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli->connect_error();
}
?>