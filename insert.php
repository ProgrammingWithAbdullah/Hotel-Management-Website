<?php
session_start();
$id=$_SESSION['username'];

$room=$_POST['room'];
$checkin=$_POST['checkin'];
$checkout=$_POST['checkout'];
$price=$_POST['price'];
$conn = mysqli_connect("localhost:3307", "root","","test");
$time=date("Y-m-d H:i:s");
$sql_total_rooms = "select roomno from rooms where roomno='$room'";
$result_total_rooms = mysqli_query($conn, $sql_total_rooms);
if(mysqli_num_rows($result_total_rooms))
{


$sql_total_rooms = "insert into booking (checkintime,username,price,roomnumber) values('$checkin','$id','$price','$room')";
$result_total_rooms = mysqli_query($conn, $sql_total_rooms);
 $sql_total_rooms = "update rooms set status='reserved', username='$id' where roomno='$room'";
$result_total_rooms = mysqli_query($conn, $sql_total_rooms);
echo 1;
}
else{
 echo 0;
}
?>