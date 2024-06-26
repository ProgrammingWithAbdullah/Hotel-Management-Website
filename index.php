

<?php
$conn = mysqli_connect("localhost:3307", "root","","test");

// Get the current date
$today = new DateTime();

// Create an array to hold the last 7 days
$lastSevenDays = array();


for ($i = 1; $i <= 7; $i++) {
 
    $day = $today->sub(new DateInterval('P1D'));
      $lastSevenDays[$i] = $day->format('Y-m-d');
    $sql_total_rooms = "select count(id) as count from booking where checkintime='$lastSevenDays[$i]'";
    $lastSevenDays[$i] =$day->format('d');
	$result_total_rooms = mysqli_query($conn, $sql_total_rooms);
	$count[$i]= mysqli_fetch_assoc($result_total_rooms)['count'];
	
}






?>
<?php
   session_start();
   if($_SESSION['username']=="")
   {
    header('location: login.php');
   }
$conn = mysqli_connect("localhost:3307", "root","","test");
$sql_total_rooms = "SELECT COUNT(*) AS total_rooms FROM rooms";
$result_total_rooms = mysqli_query($conn, $sql_total_rooms);
$total_rooms = mysqli_fetch_assoc($result_total_rooms)['total_rooms'];
$sql_available_rooms = "SELECT COUNT(*) AS available_rooms FROM rooms WHERE status='available'";
$result_available_rooms = mysqli_query($conn, $sql_available_rooms);
$available_rooms = mysqli_fetch_assoc($result_available_rooms)['available_rooms'];
$sql_occupied_rooms = "SELECT COUNT(*) AS occupied_rooms FROM rooms WHERE status='reserved'";
$result_occupied_rooms = mysqli_query($conn, $sql_occupied_rooms);
$occupied_rooms = mysqli_fetch_assoc($result_occupied_rooms)['occupied_rooms'];
$username=$_SESSION["username"];
$sql_total = "SELECT roomno from rooms where username='$username'
";
$result_total= mysqli_query($conn, $sql_total);
$row= mysqli_fetch_assoc($result_total);
if(mysqli_num_rows($result_total)>0)
{





$roomid=$row['roomno'];

}
else{
  

  $roomid="";

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Hotel Management System</title>
	<!-- Add Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <link rel="stylesheet" href="sweetalert2.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Yamifood Restaurant - Responsive HTML5 Template</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
  </head>
	<style>
    
		.btn {
  border-radius: 4px;
  font-size: 16px;
  font-weight: bold;
  padding: 10px 20px;
  transition: all 0.2s ease-in-out;
}

.btn-primary {
  background-color: #007bff;
  border-color: #007bff;
  color: #fff;
}

.btn-success {
  background-color: #28a745;
  border-color: #28a745;
  color: #fff;
}

.btn:hover {
  opacity: 0.8;
}
		/* Navbar */
		.navbar {
			background-color: #343a40;
		}

		.navbar-brand {
			color: white;
			font-weight: bold;
			font-size: 24px;
			letter-spacing: 4px;
			
		}

		.nav-link {
			color: white !important;
			font-size: 16px;
			letter-spacing: 1px;
		
			text-transform: uppercase;
			transition: all 0.3s ease-in-out;
		}

		.nav-link:hover {
			color: #ffc107 !important;
		}
    .table-wrapper-scroll-y {
    display: block;
    max-height: 400px;
    overflow-y: auto;
    -ms-overflow-style: none;
    scrollbar-width: none;
}

.table-wrapper-scroll-y::-webkit-scrollbar {
    display: none;
}
body::-webkit-scrollbar {
    display: none;
}

		/* Jumbotron */
		.jumbotron {
			background-repeat: no-repeat;
			background-size: cover;
			color: white;
			height: 500px;
			position: relative;
			text-shadow: 2px 2px #343a40;
		}

		.jumbotron::before {
			content: "";
			background-color: rgba(0, 0, 0, 0.5);
			height: 100%;
			left: 0;
			position: absolute;
			top: 0;
			width: 100%;
		}

		.jumbotron h1 {
			font-size: 72px;
			font-weight: bold;
			margin-top: 200px;
			text-align: center;
		}

		.jumbotron p {
			font-size: 24px;
			font-weight: bold;
			text-align: center;
			text-transform: uppercase;
		}
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
#sliderr {
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #343f4f;
}
.wrapper {
  display: flex;
  max-width: 650px;
  width: 100%;
  height: 400px;
  background: #fff;
  align-items: center;
  justify-content: center;
  position: relative;
  border-radius: 12px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
}
.wrapper i.button {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  height: 36px;
  width: 36px;
  background-color: #343f4f;
  border-radius: 50%;
  text-align: center;
  line-height: 36px;
  color: #fff;
  font-size: 15px;
  transition: all 0.3s linear;
  z-index: 100;
  cursor: pointer;
}
i.button:active {
  transform: scale(0.94) translateY(-50%);
}
i#prev {
  left: 25px;
}
i#next {
  right: 25px;
}
.image-container {
  height: 320px;
  max-width: 500px;
  width: 100%;
  overflow: hidden;
}
.image-container .carousel {
  display: flex;
  height: 100%;
  width: 100%;
  transition: all 0.4s ease;
}
.carousel img {
  height: 100%;
  width: 100%;
  border-radius: 18px;
  border: 10px solid #fff;
  object-fit: cover;
}

		/* Cards */
		.card-deck {
			margin-top: 50px;
		}

		.card {
			border: none;
			box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.2);
			transition: all 0.3s ease-in-out;
		}

		.card:hover {
			box-shadow: 0px 6px 20px rgba(0, 0, 0, 0.4);
			transform: translateY(-10px);
		}

		.card-header {
			background-color: #ffc107;
			color: white;
			font-size: 24px;
			font-weight: bold;
			padding: 20px;
			text-transform: uppercase;
		}

		.card-body {
			font-size: 18px;
			padding: 20px;
		}

		.card-footer {
			background-color: #f8f9fa;
			border-top: none;
			padding: 20px;
			text-align: right;
		}
    th,
      td {
        border: 1px solid black;
        padding: 5px;
        text-align: center;
        font-size: 16px;
      }
      
      th {
        background-color: #f2f2f2;
      }
		@keyframes count {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}

#occupied-rooms {
  font-size: 24px;
  font-weight: bold;
  animation: count 2s ease-out;
}
#available-rooms {
  font-size: 24px;
  font-weight: bold;
  animation: count 2s ease-out;
}
#total-rooms {
  font-size: 24px;
  font-weight: bold;
  animation: count 2s ease-out;
}


</style>
<body>

<div class="navbar-container container">
  <!-- Navigation bar code here -->
</div>
	<!-- Navigation Menu -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Hotel Management System</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle<?php if($_SESSION['usertype']=='admin')
          {
           echo 'd-none'; 
          }?>" href="user.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Staff
          </a>
        
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Reservation
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Room Types</a></li>
            <li><a class="dropdown-item" href="#">Room Availability</a></li>
            <li><a class="dropdown-item" href="#">Room Reservations</a></li>
          </ul>
        </li>
        <a class="btn btn-danger" href="logout.php">Logout</a>
      </ul>
    </div>
  </div></nav>
<br>
  <!-- Start About -->
	<div class="about-section-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<img src="images/h4.jpg" alt="" class="img-fluid">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 text-center">
					<div class="inner-column">
						<h1>Welcome To <span>Our Hotel</span></h1>
            <br>
						<p>Welcome to our luxurious hotel, a haven where comfort meets culinary delight. Nestled in a serene location, our establishment offers beautifully appointed rooms designed to provide a restful retreat for every guest. Indulge in gourmet dining at our in-house restaurant, where our chefs craft exquisite dishes from the freshest ingredients. Whether you're here for a relaxing getaway or a business trip, our amenities cater to all your needs, ensuring a memorable stay. Enjoy a morning swim in our pristine pool, followed by a delicious breakfast. Our attentive staff is dedicated to providing exceptional service, making you feel right at home. Experience the perfect blend of hospitality, comfort, and fine dining at our hotel, where every detail is designed with you in mind.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End About -->
	
	<!-- Start QT -->
	<div class="qt-box qt-background">
		<div class="container">
			<div class="row">
				<div class="col-md-8 ml-auto mr-auto text-left">
          <br><br>
          <h2 style="color: white;">
            "If you're not the one cooking, stay out of the way and compliment the chef"
          </h2>
					<h3 style="color: white;">(Michael Strahan)</h3>
				</div>
			</div>
		</div>
	</div>
	<!-- End QT -->
	
    <!-- Start Gallery -->
	<div class="gallery-box">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Our Special Places</h2>
					</div>
				</div>
			</div>
			<div class="tz-gallery">
				<div class="row">
					<div class="col-sm-12 col-md-4 col-lg-4">
						<a class="lightbox" href="images/h2.jpg">
							<img class="img-fluid" src="images/h2.jpg" alt="Gallery Images">
						</a>
					</div>
          <div class="col-sm-6 col-md-4 col-lg-4">
    <a class="lightbox" href="images/h3.jpg">
        <img class="img-fluid" src="images/h3.jpg" alt="Gallery Images" style="height: calc(100% - 65px); width: 600px;">
    </a>
</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/h4.jpg">
							<img class="img-fluid" src="images/h4.jpg" alt="Gallery Images">
						</a>
					</div>		
				</div>
			</div>
		</div>
	</div>
	<!-- End Gallery -->

  
	<!-- Start Menu -->
	<div class="menu-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Our Food Items</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="special-menu text-center">
						<div class="button-group filter-button-group">
							<button class="active" data-filter="*">All</button>
							<button data-filter=".drinks">Drinks</button>
							<button data-filter=".lunch">Lunch</button>
							<button data-filter=".dinner">Dinner</button>
						</div>
					</div>
				</div>
			</div>
      <br>
				
			<div class="row special-list">
				<div class="col-lg-4 col-md-6 special-grid drinks">
					<div class="gallery-single fix">
						<img src="images/img-01.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Lemon soda</h4>
							<h5>Rs 179</h5>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid drinks">
					<div class="gallery-single fix">
						<img src="images/img-02.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Margarita</h4>
							<h5> Rs 779</h5>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid drinks">
					<div class="gallery-single fix">
						<img src="images/img-03.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Sprite</h4>
							<h5> Rs 569</h5>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid lunch">
					<div class="gallery-single fix">
						<img src="images/img-04.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Special Lunch 1</h4>
							<h5> Rs 269</h5>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid lunch">
					<div class="gallery-single fix">
						<img src="images/img-05.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Special Lunch 2</h4>
							<h5> Rs 599</h5>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid lunch">
					<div class="gallery-single fix">
						<img src="images/img-06.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Special Lunch 3</h4>
							<h5> Rs 211</h5>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid dinner">
					<div class="gallery-single fix">
						<img src="images/img-07.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Special Dinner 1</h4>
							<h5> Rs 555</h5>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid dinner">
					<div class="gallery-single fix">
						<img src="images/img-08.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Special Dinner 2</h4>
							<h5> Rs 999</h5>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid dinner">
					<div class="gallery-single fix">
						<img src="images/img-09.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Special Dinner 3</h4>
							<h5>Rs 3000</h5>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!-- End Menu -->

  <b><h2 style="text-align: center;">Book Rooms</h2></b>
  <br>
	<!-- Page Content -->
	<div class="container">
	<div class="row mt-4">
  <div class="col-md-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Current Rooms Available</h5>
      
        <p class="card-text"  id="available-rooms"><?php echo $available_rooms; ?></p>
		<button class="btn btn-dark  w-100" data-toggle="modal" data-target="#exampleModal2">Check</button>
  
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Total Reserved Rooms</h5>
        <p class="card-text" id="occupied-rooms"><?php echo $occupied_rooms; ?></p>
        <button class="btn btn-dark  w-100" data-toggle="modal" data-target="#exampleModal">Check</button>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card">
      <div class="card-body ">
        <h5 class="card-title">Total Rooms in Building</h5>
        <p class="card-text" id="total-rooms"><?php echo $total_rooms ?></p>
        <button class="btn btn-dark  w-100" data-toggle="modal" data-target="<?php if($_SESSION['usertype']=='admin')
      {
        echo "#exampleModal3";
      }?>">Check</button>
      </div>
    </div>
  </div>
</div>

<div class="card mt-2">
<div class="row mt-3 mb-3 mx-2 text-center">
<?php if($_SESSION['usertype']!='admin')
{

?>
<div class="col-md-3">
 
<a href="book.php?id=<?php echo $username;?>&&roomno=<?php echo "";?>" class="btn btn-success">Make Reservation</a>
</div>
<div class="col-md-3">
	<a href="userprofile.php" class="btn btn-primary">View Profile</a>
</div>
<div class="col-md-3">
<button id="<?php echo $occupied_rooms; ?>" class="btn btn-danger myButton">Cancel Reservation</button>
</div>
<div class="col-md-3">
<a href="checkout.php?id=<?php echo $roomid;?>" class="btn btn-dark">Check Out</a>

</div>
</div>
<?php }
else{
  
  ?>
  <div class="col-md-12">
  <h4 style="text-align:center">ADMIN PANEL</h4>
  </div>
  <?php
}
?>
</div>
</div>


		
    <?php if($_SESSION['usertype']!='admin')
{

?>
		<!-- Guest Booking History -->
    <div class="container mt-2">
		<h2 class="text-center">Booking History</h2>
    <div class="table-wrapper-scroll-y">
		<table class="table table-bordered "id="myTable">
			<thead class="table">
				<tr>
					<th>Booking ID</th>
					<th>Check-In Date</th>
					<th>Check-Out Date</th>
					<th>Name</th>
					<th>Room No</th>
				</tr>
			</thead>
			<tbody>
			<?php 
   

      // use $_SESSION variable
      function formatDateRange($startDate, $endDate) {
        $startMonth = date('F', strtotime($startDate));
        $endMonth = date('F', strtotime($endDate));
        
        $formattedStartDate = date('j', strtotime($startDate));
        $formattedEndDate = date('j', strtotime($endDate));
        
        // Add appropriate suffix to day numbers
        if (in_array($formattedStartDate, ['1', '21', '31'])) {
            $formattedStartDate .= 'st';
        } elseif (in_array($formattedStartDate, ['2', '22'])) {
            $formattedStartDate .= 'nd';
        } elseif (in_array($formattedStartDate, ['3', '23'])) {
            $formattedStartDate .= 'rd';
        } else {
            $formattedStartDate .= 'th';
        }
        
        if (in_array($formattedEndDate, ['1', '21', '31'])) {
            $formattedEndDate .= 'st';
        } elseif (in_array($formattedEndDate, ['2', '22'])) {
            $formattedEndDate .= 'nd';
        } elseif (in_array($formattedEndDate, ['3', '23'])) {
            $formattedEndDate .= 'rd';
        } else {
            $formattedEndDate .= 'th';
        }
        
        // Return formatted date range string
        if ($startMonth == $endMonth) {
            return $formattedStartDate . ' - ' . $formattedEndDate . ' ' . $startMonth;
        } else {
            return $formattedStartDate . ' ' . $startMonth . ' - ' . $formattedEndDate . ' ' . $endMonth;
        }
    }
      $username=$_SESSION["username"];
       $sql_total = "SELECT bookinghistory.id as id,bookinghistory.price as price, bookinghistory.room as no, bookinghistory.checkintime as t1, bookinghistory.checkouttime as t2,  bookinghistory.username  as name
      
      from bookinghistory
      WHERE bookinghistory.username = '$username'
      ";
      $result_total= mysqli_query($conn, $sql_total);
      while($total = mysqli_fetch_assoc($result_total))
      {
        echo 
        "<tr>
        <td >".$total['id']."</td>";
       $date =formatDateRange($total['t1'], $total['t2']); 
       $date=explode("-",$date);
      echo "<td style='background-color:yellow;'>".$date[0]."</td>
      
        <td style='background-color:yellow;'>".$date[1]."</td>
        <td>".$total['name']."</td>
        <td>".$total['no']."</td>
        
        </tr>";
      }
      ?>
			</tbody>
		</table>
    </div>
    <?php
}
else{


?>

 <div class="row mt-3 mb-3" >
  <div class="col-md-9">
 <div class="table-wrapper-scroll-y">
		<table class="table table-bordered "id="myTable">
			<thead class="table">
				<tr>
					<th>Booking ID</th>
					<th>Check-In Date</th>
					<th>Check-Out Date</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			<?php 
   

      // use $_SESSION variable
      function formatDateRange($startDate, $endDate) {
        $startMonth = date('F', strtotime($startDate));
        $endMonth = date('F', strtotime($endDate));
        
        $formattedStartDate = date('j', strtotime($startDate));
        $formattedEndDate = date('j', strtotime($endDate));
        
        // Add appropriate suffix to day numbers
        if (in_array($formattedStartDate, ['1', '21', '31'])) {
            $formattedStartDate .= 'st';
        } elseif (in_array($formattedStartDate, ['2', '22'])) {
            $formattedStartDate .= 'nd';
        } elseif (in_array($formattedStartDate, ['3', '23'])) {
            $formattedStartDate .= 'rd';
        } else {
            $formattedStartDate .= 'th';
        }
        
        if (in_array($formattedEndDate, ['1', '21', '31'])) {
            $formattedEndDate .= 'st';
        } elseif (in_array($formattedEndDate, ['2', '22'])) {
            $formattedEndDate .= 'nd';
        } elseif (in_array($formattedEndDate, ['3', '23'])) {
            $formattedEndDate .= 'rd';
        } else {
            $formattedEndDate .= 'th';
        }
        
        // Return formatted date range string
        if ($startMonth == $endMonth) {
            return $formattedStartDate . ' - ' . $formattedEndDate . ' ' . $startMonth;
        } else {
            return $formattedStartDate . ' ' . $startMonth . ' - ' . $formattedEndDate . ' ' . $endMonth;
        }
    }
      $username=$_SESSION["username"];
      $sql_total = "SELECT booking.id as id, rooms.roomno as no, booking.checkintime as t1, booking.checkouttime as t2,  booking.username  as name
      from booking join rooms
      on rooms.roomno=booking.roomnumber  where rooms.status='reserved'and booking.username=rooms.username;
     
      ";
      $result_total= mysqli_query($conn, $sql_total);
      while($total = mysqli_fetch_assoc($result_total))
      {
        echo 
        "<tr>
        <td >".$total['id']."</td>";
       $date =formatDateRange($total['t1'], $total['t2']); 
       $date=explode("-",$date);
      echo "<td style='background-color:yellow;'>".$date[0]."</td>";
      if($total['t2']=="")
      {
        $date[1]="";
        $colour="background-color:red";
      }
      else{
        $colour="background-color:yellow";
      }
      
       echo " <td style='$colour'>".$date[1]."</td>";
       
        ?>
        <td><a href="cancel.php?id=<?php echo $total['no']?>&&bookingno=<?php echo $total['id']?>" class='btn btn-danger w-35'>Canel Reservation</a><a class='btn btn-dark ml-2 w-35' style="color:white">Check Out</a></td>
<?php
        
        echo "</tr>";
      }
      ?>
			</tbody>
		</table>
    </div>
   
    </div>
    <div class="col-md-3">
		<div style="height: 300px; width: 350px;" class="text-center">
		<canvas id="myChart"  ></canvas>
    <h4>Last 7 Days Record</h4>
		</div>
	</div>
  </div>
  </div>
<?php
}?>
    

		<!-- Guest Feedback Form -->

<!-- Button trigger modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="width: 68%!important;">>
    <div class="modal-content" >
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <table class="table table-bordered table-primary">
          <thead>
            <tr>
              <th>Room Number</th>
              <th>Status</th>
            
            </tr>
          </thead>
          <tbody>
          <?php 
  $sql_total_room = "SELECT status,roomno FROM rooms where status='reserved'";
$result_total_room= mysqli_query($conn, $sql_total_room);
while($total_room = mysqli_fetch_assoc($result_total_room))
{
  echo "  <tr> 
  <td>".$total_room['roomno']."</td>
  ";

  echo " <td><span class='badge bg-danger'>Occupied</span></td>";

             

}?>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <table class="table table-bordered table-primary">
          <thead>
            <tr>
              <th>Room Number</th>
              <th>Status</th>
              <th>Book Now</th>
            </tr>
          </thead>
          <tbody>
          <?php 
            $sql_total_room = "SELECT status,roomno FROM rooms where status='available'";
$result_total_room= mysqli_query($conn, $sql_total_room);
while($total_room = mysqli_fetch_assoc($result_total_room))
{
  echo "  <tr> 
  <td>".$total_room['roomno']."</td>
  ";

if($total_room['status']=="available")
{


$roomnum=$total_room['roomno'];
          
              
              echo "<td><span class='badge bg-success text-center'>Available</span></td>";
              echo" <td><a href='book.php?id=$username&&roomno=$roomnum'class='btn btn-primary btn-sm'>Book Now</a></td>
            </tr>";
}

             

}?>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
	

<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <table class="table table-bordered table-primary">
          <thead>
            <tr>
              <th>Room Number</th>
              <th>Status</th>
              <th>Reserved By</th>
            </tr>
          </thead>
          <tbody>
          <?php 
            $sql_total_room = "SELECT status,roomno,username FROM rooms ";
$result_total_room= mysqli_query($conn, $sql_total_room);
while($total_room = mysqli_fetch_assoc($result_total_room))
{
  echo "  <tr> 
  <td>".$total_room['roomno']."</td>
  ";

if($total_room['status']=="available")
{



          
              
              echo "<td><span class='badge bg-success text-center'>Available</span></td>";
             
}        
else
{
  echo " <td><span class='badge bg-danger'>Occupied</span></td>";
  echo" <td><p>".$total_room['username']."</p></td>";
}
echo "</tr>";
         

}?>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- ALL JS FILES -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>
	<!-- ALL JS FILES -->
	
 <script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
  try {
  // code at line 564

    

$(document).ready(function() {
  
  $('#myTable tbody').on('click', 'tr', function () {
    // Get the DataTable instance
    var table = $('#myTable').DataTable();

    // Get the clicked row
    var row = table.row(this);

 //

// Remove the row from the DataTable's data structure and redraw the table
row.nodes().to$().css('background-color','red');
row.remove().draw();
});

  
  $('.myButton').click(function() {
    if(this.id=="")
  {

    Swal.fire({
  title: 'No room reserved',
 
  icon: 'warning',
    });
  }
  else
  {
    Swal.fire({
  title: 'Are you sure to cancel reservation for room'+this.id+'?',
  text: "This action cannot be undone",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!',
  dangerMode: true,
}).then((result) => {
  if (result.isConfirmed) {
   
     window.location.href="cancel.php?id="+this.id;
    Swal.fire(
   
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
})
  }
  });

});
} catch (error) {
  console.error(error);
}
// Get the DOM elements for the image carousel
const wrapper = document.querySelector(".wrapper"),
  carousel = document.querySelector(".carousel"),
  images = document.querySelectorAll("img"),
  buttons = document.querySelectorAll(".button");

let imageIndex = 1,
  intervalId;

// Define function to start automatic image slider
const autoSlide = () => {
  // Start the slideshow by calling slideImage() every 2 seconds
  intervalId = setInterval(() => slideImage(++imageIndex), 2000);
};
// Call autoSlide function on page load
autoSlide();

// A function that updates the carousel display to show the specified image
const slideImage = () => {
  // Calculate the updated image index
  imageIndex = imageIndex === images.length ? 0 : imageIndex < 0 ? images.length - 1 : imageIndex;
  // Update the carousel display to show the specified image
  carousel.style.transform = `translate(-${imageIndex * 100}%)`;
};

// A function that updates the carousel display to show the next or previous image
const updateClick = (e) => {
  // Stop the automatic slideshow
  clearInterval(intervalId);
  // Calculate the updated image index based on the button clicked
  imageIndex += e.target.id === "next" ? 1 : -1;
  slideImage(imageIndex);
  // Restart the automatic slideshow
  autoSlide();
};

// Add event listeners to the navigation buttons
buttons.forEach((button) => button.addEventListener("click", updateClick));

// Add mouseover event listener to wrapper element to stop auto sliding
wrapper.addEventListener("mouseover", () => clearInterval(intervalId));
// Add mouseleave event listener to wrapper element to start auto sliding again
wrapper.addEventListener("mouseleave", autoSlide);
var startCount = 0;
var endCount = <?php echo $occupied_rooms; ?>;
var endCount1= <?php echo $available_rooms; ?>;
var endCount2 = <?php echo $total_rooms; ?>;
var duration = 2000; // in ms
var interval = 10; // in ms
var step = (endCount - startCount) * interval / duration;
var step1 = (endCount1 - startCount) * interval / duration;
var step2 = (endCount2 - startCount) * interval / duration;
var currentCount = 0;
var currentCount1 = 0;
var currentCount2 = 0;
var countingInterval = setInterval(function() {
  currentCount += step;
  if (currentCount >= endCount) {
    clearInterval(countingInterval);
    currentCount = endCount;
  }
  document.getElementById("occupied-rooms").innerHTML = Math.floor(currentCount);

}, interval);
var countingInterval1 = setInterval(function() {
  
  currentCount2 += step2;
  if (currentCount2 >= endCount2) {
    clearInterval(countingInterval1);
    currentCount2 = endCount2;
  }
  document.getElementById("total-rooms").innerHTML = Math.floor(currentCount2);

}, interval);
var countingInterval2 = setInterval(function() {
  currentCount1 += step1;
  if (currentCount1>= endCount1) {
    clearInterval(countingInterval2);
    currentCount1 = endCount1;
  }
  document.getElementById("available-rooms").innerHTML = Math.floor(currentCount1);

}, interval);

  </script>
  <script>
		var ctx = document.getElementById('myChart').getContext('2d');
    var barColors = ["red", "green","blue","orange","brown","yellow","black"];
		var myChart = new Chart(ctx, {
			type: 'pie',
			data: {
        labels: [<?php echo  $lastSevenDays[1]?>+'th',<?php echo  $lastSevenDays[2]?>+'th', <?php echo  $lastSevenDays[3]?>+'th', <?php echo  $lastSevenDays[4]?>+'th', <?php echo  $lastSevenDays[5]?>, <?php echo  $lastSevenDays[6]?>, <?php echo  $lastSevenDays[7]?>],
				datasets: [{
       
         
					data: [<?php echo $count[1]?>, <?php echo $count[2]?>, <?php echo $count[3]?>, <?php echo $count[4]?>, <?php echo $count[5]?>, <?php echo $count[6]?>, <?php echo $count[7]?>],
				label:'Room Reserved in Last  Days',
          xColor: barColors[
						'red',
						'green',
						'black',
						'brown',
						'yellow',
						'pink',
						'rgba(255, 99, 132, 0.2)'
					],
				
					
				}]
			},
			options: {
				layout: {
					padding: {
						left: 10,
						right: 10,
						top: 0,
						bottom: 10
					}
				},
				legend: {
					display: true,
					position: 'bottom'
				},
				maintainAspectRatio: true // set this to false to allow chart to be resized
			}
		});
	</script>
  </body>
<!-- Modal -->
