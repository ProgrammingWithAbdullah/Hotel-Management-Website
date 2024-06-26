<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

   
  </head>
  <body>
 
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
<?php
session_start();
$id=$_GET['id'];
$conn = mysqli_connect("localhost:3307", "root","","test");
$time2=date("Y-m-d H:i:s");
$username=$_SESSION['username'];
$sql_total_rooms = "select checkintime from booking where roomnumber='$id' and username='$username' order by checkintime desc LIMIT 1";
$result_total_rooms = mysqli_query($conn, $sql_total_rooms);
$time= mysqli_fetch_assoc($result_total_rooms)['checkintime'];
if($time!=NULL)
{
$sql_total_rooms = "delete from booking where roomnumber='$id'";
$result_total_rooms = mysqli_query($conn, $sql_total_rooms);
echo $sql_total_rooms = "insert into bookinghistory (username,room,checkintime,checkouttime) values('$username','$id','$time','$time2')";
$result_total_rooms = mysqli_query($conn, $sql_total_rooms);
$sql_total_rooms = "update rooms set status='available', username='' where roomno='$id'";
$result_total_rooms = mysqli_query($conn, $sql_total_rooms);
}
?>


<script>
    alert("Successfully check out From Room  ");
    setTimeout(function(){
      window.location.href="index.php";
    }, 300); 
</script>
