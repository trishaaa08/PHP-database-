<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="design.css">
    <title>User Dashboard</title>
</head>
<body>
    <div class="container">
        <h1>Welcome to GROUP 2 Dashboard</h1>
        <a href="logout.php" class="my-button">Logout</a>
        <a href="profile.php" class="cute-button">Gallery</a>
        <a href="myfile.php" class="cute-button">Course</a>
        <a href="https://docs.google.com/spreadsheets/d/1-nE8npvruD2oJkMhYUn4kfoRpt7gSG17HU-_ZWpN4Ug/edit?gid=0#gid=0" class="googlesheet">Google Sheet</a>
        <a href="https://docs.google.com/spreadsheets/d/1tmdTsip9J4nwcI4659eZh0AbD4KhYwf3-etm8TObhb8/edit?gid=0#gid=0" class="chart">Gannt Chart</a>
    </div>
</body>
</html>