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
  $tourist_name=$fields[0];
   $tourist_email=$fields[1];
   $telephone_number=$fields[2];
   $no_of_adults=$fields[3];;
   $no_of_children=$fields[4];
   $arrival_date=$fields[5];
   $departure_date=$fields[6];
   $notes=$fields[7];

}

     
  ?>
  <div class="elem-group">
    <label for="name">Your Name</label>
    <input type="text" id="name" name="tourist_name" placeholder="John Doe" pattern=[A-Z\sa-z]{3,20} <?php echo 'value="'.$tourist_name.'"'; ?>>
  </div>
  <div class="elem-group">
    <label for="email">Your E-mail</label>
    <input type="text" id="email" name="tourist_email" placeholder="john.doe@email.com"<?php echo 'value="'.$tourist_email.'"'; ?> >
  </div>
  <div class="elem-group">
    <label for="phone">Your Phone</label>
    <input type="text" id="phone" name="tourist_phone" placeholder="498-348-3872"  <?php echo 'value="'.$telephone_number.'"'; ?>>
  </div>
  <hr>
  <div class="elem-group inlined">
    <label for="adult">Adults</label>
    <input type="number" id="adult" name="total_adults"  min="1" <?php echo 'value="'.$no_of_adults.'"'; ?>>
  </div>
  <div class="elem-group inlined">
    <label for="child">Children (Less than age 12)</label>
    <input type="number" id="child" name="total_children"  min="0" <?php echo 'value="'.$no_of_children.'"'; ?>>
  </div>
  <div class="elem-group inlined">
    <label for="arrival-date">Arrival Date</label>
    <input type="date" id="arrival-date" name="arrival"  min= <?php echo date('Y-m-d H:i:s');?> <?php echo 'value="'.$arrival_date.'"'; ?>>
  </div>
  <?php
                $datetime = new DateTime('tomorrow');
               
                ?>
  <div class="elem-group inlined">
    <label for="departure-date">Departure Date</label>
    <input type="date" id="departure-date" name="departure"  min=<?php  echo $datetime->format('Y-m-d');?> <?php echo 'value="'.$departure_date.'"'; ?>>
  </div>

  <hr>
  <div class="elem-group">
    <label for="message">Special Notes</label>
    <textarea id="message" name="special_notes" placeholder="Tell your guide all the important details about your trip including the places you want to visit, your dietary restrictions, special needs and so on." ><?php echo ''.$notes.''; ?></textarea>
  </div>
  <div class="agreeCls">
				<div class="agreed1">
					<input type="checkbox" name="agree">
				</div>
				<div class="agreed2">
					<label for="agree">I agree that I will take the whole responsibility of the tour and I will not hold Ceylon Trek against any problems occured during tour.</label>
				</div>
			</div>

  <button type="submit" name="submit">Reserve the Guide</button>
</form>


</div>
<div class="dashend"> <?php include('../view/footer.php'); ?> </div>

</div>
</body>
</html>