<?php
$userid = $_POST['userid'];
$password = $_POST['password'];
if ($userid === "admin" && $password === "admin"){
    session_start();
        $_SESSION["userid"] = $userid;
    header("location: gokuldham_office.php");
}
else{
    header("location: supreme.php");
}
?>