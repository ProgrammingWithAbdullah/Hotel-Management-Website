

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

<!-- Bootstrap CSS -->

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>Hello, world!</title>
  </head>
  <?php
$id=$_GET['id'];
$roomno=$_GET['roomno'];

?>
<style>

.receipt {
      border: 1px solid #ccc;
      max-width: 300px;
      padding: 10px;
      font-family: Arial, sans-serif;
      font-size: 14px;
    }
    .receipt h2 {
      text-align: center;
      margin-bottom: 20px;
    }
    .receipt .row {
      margin-bottom: 10px;
    }
    .receipt .item {
      margin-bottom: 5px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .receipt .item .left {
      font-weight: bold;
    }
    .receipt .item .right {
      font-weight: normal;
    }
    .receipt .item:after {
      content: "";
      display: block;
      clear: both;
    }
    .receipt .total {
      font-weight: bold;
      border-top: 1px solid #ccc;
      margin-top: 10px;
      padding-top: 10px;
    }
    .receipt .card-number {
      font-size: 12px;
      margin-top: 10px;
      text-align: center;
    }
    .col-6
    {
      font-weight:bolder ;
    }
</style>


  <body>
  <div class="container">
  <div class="row">
    <div class="col-md-6 mx-auto">
      <div class="card mt-5">
        <div class="card-body">
          <h4 class="card-title text-center mb-4">Book Your Room</h4>
          <form method="POST">
  <div class="mb-3">
    <label for="room-type" class="form-label">Room Type</label>
    <div class="btn-group" role="group" aria-label="Room Type">
      <button type="button" class="btn btn-outline-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Single Room"><i class="fa fa-bed"></i></button>
      <button type="button" class="btn btn-outline-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Double Room"><i class="fa fa-bed"></i><i class="fa fa-bed"></i></button>

  </div>
  <div class="mb-3">
  <label for="checkin">Check-in Date:</label>

<input type="date"class="form-control" id="checkin" value="<?php echo date('Y-m-d')?>" name="checkin">

  </div>
  <div class="mb-3">
    <label for="check-out" class="form-label">Check-Out Date</label>
    <input type="date" class="form-control" id="checkout" name="checkout">
  </div>
  <div class="mb-3">
    <label for="total-rent" class="form-label">Total Rent</label>
    <input type="text" class="form-control" id="total-rent" name="total-rent" readonly>
  </div>
  <div class="mb-3">
    <label for="roomnumber" class="form-label">Room Number</label>
    <input type="number" class="form-control" id="room"value="<?php if($roomno!=""){
      echo $roomno;
    }?>" name="room">
  </div>
  <button  type="button" id="book" class="btn btn-primary">Book Now</button>
</form>

        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="receiptModal" tabindex="-1" role="dialog" aria-labelledby="receiptModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
  <div class="modal-dialog modal-dialog-centered" style="width:68%">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="receiptModalLabel">ATM Receipt</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="receipt">
        <h2> Receipt</h2>
    
        <div class="row">
            <div class="col-12 text-center">
              <h5>High Det Hotal</h5>
            </div>
          </div>
          <div class="row">
            <div class="col-6">Transaction ID:</div>
            <div class="col-6 text-right">1234567890</div>
          </div>
          <div class="row">
            <div class="col-6">Checkin Date</div>
            <div class="col-6 text-right" id="date1">01/01/2022</div>
          </div>
          <div class="row">
            <div class="col-6">Checkout Date</div>
            <div class="col-6 text-right" id="date2"></div>
          </div>
          <div class="row">
            <div class="col-6">Room No</div>
            <div class="col-6 text-right" id='roomnumber'></div>
          </div>
          <div class="row">
            <div class="col-6">Transaction Type:</div>
            <div class="col-6 text-right">Withdrawal</div>
          </div>
          <div class="row">
            <div class="col-6">tax:</div>
            <div class="col-6 text-right">10%</div>
          </div>
          <div class="row">
            <div class="col-6">Total bill:</div>
            <div class="col-6 text-right" id="total"></div>
          </div>
          <div class="row">
        <div class="col-6">Card Number:</div>
        <div class="col-6 text-right">
        **** **** **** 1234
        </div>
      </div>
          <div class="row">
            <div class="col-12 text-center mt-3">
              <small>Thank you for banking with ABC Bank</small>
            </div>
          </div>
        </div>
      </div>
     
      <div class="modal-footer">
        <button  id="send" class="btn btn-secondary w-50" >PAY</button>
      </div>
    </div>
  
    </div>
  </div>
  
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    $("#book").click(function(){
 
    var checkin=$("#checkin").val();
    var checkout=$("#checkout").val();
    var room=$("#room").val();
    var rent=$("#total-rent").val();
    $("#date1").html(checkin);
    $("#date2").html(checkout);
    $("#roomnumber").html(room);
    $("#total").html(rent);
    $("#receiptModal").modal('show');

  
});
$("#send").click(function(){
 alert()
  var modalData = {
      checkin: $('#date1').html(),
      checkout: $('#date2').html(),
      room: $('#roomnumber').html(),
      price: $('#total').html()

    };

    // Send the data to the PHP page
    $.ajax({
      type: "POST",
      url: "insert.php",
      data: modalData,
      success: function(response) {
        if(response==1)
        {
          window.location.href="index.php";
        }
        else{
          alert("room not available");
        }
      }
    });


});
 $(document).ready(function () {

    
    // get the checkin and checkout input fields
const checkinInput = document.getElementById('checkin');
const checkoutInput = document.getElementById('checkout');

// listen for changes in the input fields
checkinInput.addEventListener('change', calculateTotalRent);
checkoutInput.addEventListener('change', calculateTotalRent);

// calculate the total rent and update the input field
function calculateTotalRent() {
  // get the checkin and checkout dates
  const checkinDate = new Date(checkinInput.value);
  const checkoutDate = new Date(checkoutInput.value);

  // calculate the number of days between the two dates
  const oneDay = 24 * 60 * 60 * 1000; // hours * minutes * seconds * milliseconds
  const diffDays = Math.round(Math.abs((checkoutDate - checkinDate) / oneDay));

  // get the rent per day (replace with your own value)
  const rentPerDay = 50;

  // calculate the total rent
  const totalRent = diffDays * rentPerDay;

  // update the input field
  document.getElementById('total-rent').value = totalRent;
}
 });

</script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
  </body>
</html>