<?php session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cancelling Tour</title>
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
<form action="../controller/cancellation_controller.php" method="POST">

  <?php

     $fields=array();
    $reasons='';



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
    <label for="name">Tourist Name : <?php echo $fields['tourist_name']?></label>
   
  </div>
  <div class="elem-group">
    <label for="email">Tourist E-mail : <?php echo $fields['tourist_email']?></label>
  
  </div>
  <div class="elem-group">
    <label for="phone">Tourist Phone : <?php echo $fields['telephone']?></label>
  
  </div>
  <hr>
  <div class="elem-group inlined">
    <label for="adult">Adults : <?php echo $fields['no_of_adults']?></label>

  </div>
  <div class="elem-group inlined">
    <label for="child">Children (Less than age 12) : <?php echo $fields['no_of_children']?></label>

  </div>
  <div class="elem-group inlined">
    <label for="arrival-date">Arrival Date : <?php echo $fields['arrival_date']?></label>
 
  </div>

  <div class="elem-group inlined">
    <label for="departure-date">Departure Date : <?php echo $fields['departure_date']?></label>

  </div>

  <hr>
  <div class="elem-group">
    <label for="message">Special Notes</label>
    <p style ="color:black;"><?php echo $fields['notes']?></p>
   
  </div>

  <div class="elem-group">
    <label for="message">Reasons for Cancellation</label>
    <textarea id="message" name="reason" ><?php echo ''.$reasons.''; ?></textarea>
  </div>


  <button type="submit" name="submit_cancellation_tourist" value="<?php echo $fields['reservation_id']?>">Cancel reservation</button>
</form>


</div>
<div class="dashend"> <?php include('../view/footer.php'); ?> </div>

</div>
</body>
</html>