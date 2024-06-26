<?php

$id=$_GET['id'];
$bookid=$_GET['bookingno'];
session_start();
$username=$_SESSION['username'];
$usertype=$_SESSION['usertype'];
$conn = mysqli_connect("localhost:3307", "root","","test");


$sql_total_rooms = "select checkintime from booking where roomnumber='$id' and username='$username' order by checkintime desc LIMIT 1";
$result_total_rooms = mysqli_query($conn, $sql_total_rooms);
$time= mysqli_fetch_assoc($result_total_rooms)['checkintime'];
$sql_total_rooms = "delete from booking where roomnumber='$id' and checkintime='$time'";

$result_total_rooms = mysqli_query($conn, $sql_total_rooms);
$sql_total_rooms = "insert into bookinghistory (username,room,checkintime,checkouttime) values('$username','$id','$time','')";
$result_total_rooms = mysqli_query($conn, $sql_total_rooms);
$sql_total_rooms = "update rooms set status='available', username='' where roomno='$id'";
$result_total_rooms = mysqli_query($conn, $sql_total_rooms);
header("location: index.php");
?>