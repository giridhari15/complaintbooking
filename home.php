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
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css" type="text/css">
    <title>Home | Complaint Booking</title>
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
                <li><a href="view_complaint.php">View Complaint</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <h1>Register a Complaint!</h1>
        <div class="card">
            <div class="card-body">
                <form method="post" action="post_complaint.php">
                    <input type="text" name="subject" placeholder="Subject" class="input" required>
                    <textarea row="5" name="description" class="input_description" placeholder="Description"
                        required></textarea>
                    <button class="submit-btn" type="submit">Submit the Complaint</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>