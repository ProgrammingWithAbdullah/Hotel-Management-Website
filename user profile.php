

<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

// Check if session variable 'id' is set
if (!isset($_SESSION['id'])) {
  die("User ID not set in session.");
}

$id=$_SESSION['id'];
$conn = mysqli_connect("localhost:3307", "root","","test");
$time=date("Y-m-d H:i:s");
$sql_total_rooms = "select * from user where id='$id'";
$result_total_rooms = mysqli_query($conn, $sql_total_rooms);
$row=mysqli_fetch_all($result_total_rooms);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>User Profile</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css">
  <!-- Custom CSS -->
 <style>
    /* Custom styles for user profile form */

h2 {
  font-size: 2.5rem;
  font-weight: bold;
}

label {
  font-weight: bold;
}

input[type="text"],
input[type="email"] {
  background-color: #f7f7f7;
  border: none;
  border-radius: 0;
  box-shadow: none;
  font-size: 1.2rem;
  padding: 1rem;
}

input[type="text"]:focus,
input[type="email"]:focus {
  box-shadow: none;
  border: 2px solid #007bff;
}

.btn-primary {
  background-color: #007bff;
  border-color: #007bff;
  border-radius: 0;
  font-weight: bold;
  letter-spacing: 1px;
  margin-top: 2rem;
  padding: 1rem 3rem;
  text-transform: uppercase;
}

.btn-primary:hover {
  background-color: #0069d9;
  border-color: #0062cc;
}

.btn-primary:focus {
  box-shadow: none;
}

 </style>
</head>
<body>
  <div class="container mt-5">
    <h2 class="text-center mb-5">User Profile</h2>
    <div class="row justify-content-center">
      <div class="col-md-6">
        <form>
          <div class="form-group mb-3">
            <label for="firstName">User Name</label>
            <input type="text" class="form-control" id="firstName" value="<?php echo $row['username']?>" readonly>
          </div>
          <div class="form-group mb-3">
            <label for="email">Email Address</label>
            <input type="email" class="form-control" id="email" value="<?php echo $row['email']?>" readonly>
          </div>
          <div class="form-group mb-3">
            <label for="address">password</label>
            <input type="text" class="form-control" id="pass" value="<?php echo $row['password']?>"readonly>
          </div>
          <div class="form-group mb-3">
            <label for="address">User Type</label>
            <input type="text" class="form-control" id="address" value="<?php echo $row['usertype']?>" readonly>
          </div>
          <a href="index.php" class="btn btn-primary">Back To Dashboard</a>
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
