<?php
$mid = $_POST['memberID'];
$cid = $_POST['courtID'];
$bd = $_POST['bookingDate'];
$st = $_POST['startTime'];
$et = $_POST['endTime'];

include("dbcon.php");

$sql = "insert into booking(memberid, courtid, bookingDate, starttime, endtime) values ('$mid', '$cid', '$bd', '$st', '$et')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
} if memberid = 13 and courtid = 15 doesnt work check if these values exist in the database or if tehres any constyraints preventing it
 
mysqli_close($conn);
?>