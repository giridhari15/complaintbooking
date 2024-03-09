<?php
require 'connection.php';
?>

<?php
$name = mysqli_escape_string($con, $_POST['name']);
$email = mysqli_escape_string($con, $_POST['email']);
$email_query = "SELECT * FROM USER WHERE EMAIL = '$email'";
$email_query_result = $con->query($email_query);

if ($email_query_result->num_rows > 0) {
    header('location: register.php');
} else {
    $password = mysqli_escape_string($con, $_POST['password']);
    $phone = mysqli_escape_string($con, $_POST['phone']);
    $block_no = mysqli_escape_string($con, $_POST['block_no']);
    $apartment_no = mysqli_escape_string($con, $_POST['apartment_no']);
    $register_query = "insert into user (name, email, password, phone, block_no, apartment_no) values ('$name', '$email', '$password', '$phone','$block_no', '$apartment_no');";

    if ($con->query($register_query) === TRUE) {
        header("location: login.php?email=$email");
        //echo("Success");
    } else {
        // header('location: product.php?signup_success=You have Registered Successfully');
    }
}

$con->close();

?>