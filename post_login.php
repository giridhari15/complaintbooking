<?php
require 'connection.php';
?>

<?php
$password = mysqli_escape_string($con, $_POST['password']);
$email = mysqli_escape_string($con, $_POST['email']);
$select_query = "SELECT * FROM USER WHERE EMAIL = '$email' AND PASSWORD = '$password'";
$select_query_result = $con->query($select_query);

if ($select_query_result->num_rows > 0) {
    while ($row = $select_query_result->fetch_assoc()) {
        session_start();
        $_SESSION["email"] = $email;
        header("location: home.php");
    }
} else {
    header('location: index.php');
}
$con->close();
?>