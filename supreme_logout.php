<?php
require 'connection.php';
session_start();
if (!isset($_SESSION["userid"])) {
    header('location: supreme.php');
}
?>
<?php
session_unset();
session_destroy();
header('location: supreme.php');
?>