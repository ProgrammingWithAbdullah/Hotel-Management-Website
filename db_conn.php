<?php
$conn = mysqli_connect("localhost:3307", "root","","test");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
