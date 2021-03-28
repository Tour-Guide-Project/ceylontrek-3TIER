<?php session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation</title>
    <!-- <link rel="stylesheet" href="../resources/css/homepage.css"> -->

    <link rel="stylesheet" href="../resources/css/top_bar.css">
    <link rel="stylesheet" href="../resources/css/footer.css">
    <link rel="stylesheet" href="../resources/css/new_top_bar.css">
    <link rel="stylesheet" href="../resources/css/reservation.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../resources/js/reservation.js"></script> 
</head>
<body style="background-color:whitesmoke">
<?php 
    if (!isset($_SESSION['id'])){
        include('../view/top_bar.php');
    }else{
        include('../view/new_top_bar.php');
    }
    ?> 

<div class="reservation_form">
<form action="../controller/reservation_controller.php" method="POST">

  <?php

      $tourist_name=''; 
        $tourist_email='';
        $telephone_number='';
        $no_of_adults='';
        $no_of_children='';
        $arrival_date='';
        $departure_date='';
        $notes='';
        $price_per_day='';
          $total_price='';
 



  if(isset($_GET['param'])){
    $errors=$_GET['param'];
foreach ($errors as $error) {
echo '<p class="error" style="color:blue;">'.$error.'</p>';
}
}

if(isset($_GET['param1'])){
  $fields=$_GET['param1'];

}

     
  ?>
  <div class="elem-group">
    <label for="name">Your Name</label>
   
  </div>
  <div class="elem-group">
    <label for="email">Your E-mail</label>
  
  </div>
  <div class="elem-group">
    <label for="phone">Your Phone</label>
  
  </div>
  <hr>
  <div class="elem-group inlined">
    <label for="adult">Adults</label>

  </div>
  <div class="elem-group inlined">
    <label for="child">Children (Less than age 12)</label>

  </div>
  <div class="elem-group inlined">
    <label for="arrival-date">Arrival Date</label>
 
  </div>

  <div class="elem-group inlined">
    <label for="departure-date">Departure Date</label>

  </div>

  <hr>
  <div class="elem-group">
    <label for="message">Special Notes</label>
   
  </div>


  <button type="submit" name="submit">Reserve the Guide</button>
</form>


</div>
<div class="dashend"> <?php include('../view/footer.php'); ?> </div>

</div>
</body>
</html>