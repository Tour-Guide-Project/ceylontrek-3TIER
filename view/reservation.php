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
<form action="../controller/reservation_controller.php" method="get">

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
        $errors=$_GET['param1'];
  foreach ($errors as $error) {
  echo '<p class="error" style="color:blue;">'.$error.'</p>';
  }
  }

     
  ?>
  <div class="elem-group">
    <label for="name">Your Name</label>
    <input type="text" id="name" name="tourist_name" placeholder="John Doe" pattern=[A-Z\sa-z]{3,20} >
  </div>
  <div class="elem-group">
    <label for="email">Your E-mail</label>
    <input type="email" id="email" name="tourist_email" placeholder="john.doe@email.com" >
  </div>
  <div class="elem-group">
    <label for="phone">Your Phone</label>
    <input type="tel" id="phone" name="tourist_phone" placeholder="498-348-3872"  >
  </div>
  <hr>
  <div class="elem-group inlined">
    <label for="adult">Adults</label>
    <input type="number" id="adult" name="total_adults" placeholder="2" min="1" >
  </div>
  <div class="elem-group inlined">
    <label for="child">Children (Less than age 12)</label>
    <input type="number" id="child" name="total_children" placeholder="2" min="0" >
  </div>
  <div class="elem-group inlined">
    <label for="arrival-date">Arrival Date</label>
    <input type="date" id="arrival-date" name="arrival"  min=<?php echo date('Y-m-d');?>>
  </div>
  <?php
                $datetime = new DateTime('tomorrow');
               
                ?>
  <div class="elem-group inlined">
    <label for="departure-date">Check-out Date</label>
    <input type="date" id="departure-date" name="departure"  min=<?php  echo $datetime->format('Y-m-d H:i:s');?>>
  </div>
  <div class="elem-group">
    <label for="package-selection">Select Tour Package</label>
    <select id="package-selection" name="package_preference" >
        <option value="">Choose a Tour Package from the List if you are interested</option>
        <option value="connecting">Connecting</option>
        <option value="adjoining">Adjoining</option>
        <option value="adjacent">Adjacent</option>
    </select>
  </div>
  <hr>
  <div class="elem-group">
    <label for="message">Special Notes</label>
    <textarea id="message" name="special_notes" placeholder="Tell your guide all the important details about your trip including the places you want to visit, your dietary restrictions, special needs and so on." ></textarea>
  </div>
  <div class="agreeCls">
				<div class="agreed1">
					<input type="checkbox" name="agree">
				</div>
				<div class="agreed2">
					<label for="agree">I agree that I will take the whole responsibility of the tour and I will not hold Ceylon Trek against any problems occured during tour.</label>
				</div>
			</div>

  <button type="submit" name="reserve">Reserve the Guide</button>
</form>


</div>
<div class="dashend"> <?php include('../view/footer.php'); ?> </div>

</div>
</body>
</html>