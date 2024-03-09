<?php
require 'connection.php';
?>
<?php
session_start();
if (!isset($_SESSION["email"])) {
    header('location: login.php');
}

$email = $_SESSION["email"];
$query = "select * from user where email='$email'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];

$i = 1;
$complaint_result = mysqli_query($con, "select * from complaint where email='$email'");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view_complaint.css" type="text/css">
    <title>View Complaint | Complaint Booking</title>
</head>

<body>
    <div class="nav">
        <div class="left-nav">
            <h2>Welcome
                <?php echo $name; ?>
            </h2>
        </div>
        <div class="right-nav">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <h1>Your complaints are : </h1>
        <?php
        while ($row = mysqli_fetch_assoc($complaint_result)) {
        ?>
        <div class="card">
            <div class="card-body">
                <p style="display: inline">
                    <?php echo $i++; ?>.&nbsp;&nbsp;
                </p>
                <b>
                    <?php echo $row['subject']; ?>
                </b>
                <p style="margin-left: 15px">
                    <?php echo $row['description']; ?>
                </p>
                <br>
                <button
                    style="float: right; height: 35px; background-color: rgb(80, 80, 255); cursor: pointer; padding: 5px 15px 5px 15px; border-radius: 5px; color: white;"
                    onclick="window.location.href = 'edit_complaint.php?id=<?php echo $row['id']; ?>';">Edit</a>
                    <button
                        style="height: 35px; background-color: rgb(255, 100, 100); cursor: pointer; padding: 5px 15px 5px 15px; border-radius: 5px; color: white;"
                        onclick="window.location.href = 'delete_complaint.php?id=<?php echo $row['id']; ?>';">Delete</a>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
</body>

</html>