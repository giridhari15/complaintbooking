<?php
require 'connection.php';
session_start();
if (!isset($_SESSION["userid"])) {
    header('location: supreme.php');
}
$userid = $_SESSION["userid"];
$select_query = "SELECT * FROM COMPLAINT NATURAL JOIN USER";
$select_query_result = $con->query($select_query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secretary Office | Complaint Booking</title>
</head>

<body>
    <div
        style="padding: 1% 0% 1% 2%; background-color: darksalmon; margin: 0;display: flex; flex-direction: row; flex-wrap: nowrap; justify-content: space-between;">
        <div style="min-width:80%">
            <h2>Welcome&nbsp;
                <?php echo ucwords($userid); ?>
            </h2>
            <h4>Dear Secretary, We may some complaints. Please Solve them at the earliest</h4>
        </div>
        <div style="margin: 4% 0% 0% 1%; min-width: 20%">
            <a href="supreme_logout.php"
                style="text-decoration: none; font-weight: bolder; font-size: larger; color: black">Logout</a>
        </div>
        <br>
    </div>
    <div style="margin-top: 2%;">
        <?php
            while ($row = $select_query_result->fetch_assoc()) {
            ?>
        <div class="card" style="background-color: lavenderblush; margin: 2%; padding: 1%;">
            <div class="content" style="margin: 2px 0px 2px 4px; line-height: 1.8;">
                <b>Name: </b>
                <?php echo $row['name']; ?><br>
                <b>Block: </b>
                <?php echo $row['block_no']; ?><br>
                <b>Apartment: </b>
                <?php echo $row['apartment_no']; ?><br>
                <b>Complaint: </b>
                <?php echo $row['subject']; ?><br>
                <b>Description: </b>
                <?php echo $row['description']; ?><br>
                <b>Date Time: </b>
                <?php echo $row['timestamp']; ?><br>
                <div style="display: flex;">
                    <button
                        style="height: 35px; background-color: rgb(80, 80, 255); cursor: pointer; padding: 5px 15px 5px 15px; border-radius: 5px; color: white;"
                        onclick="window.location.href = 'resolve_complaint.php?id=<?php echo $row['id']; ?>';">Complaint
                        Resolved</button>
                </div>
            </div>
        </div>

        <?php
            }
            ?>
    </div>
</body>

</html>