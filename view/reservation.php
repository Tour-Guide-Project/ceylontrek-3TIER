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
<form action="reservation.php" method="post">
  <div class="elem-group">
    <label for="name">Your Name</label>
    <input type="text" id="name" name="tourist_name" placeholder="John Doe" pattern=[A-Z\sa-z]{3,20} required>
  </div>
  <div class="elem-group">
    <label for="email">Your E-mail</label>
    <input type="email" id="email" name="tourist_email" placeholder="john.doe@email.com" required>
  </div>
  <div class="elem-group">
    <label for="phone">Your Phone</label>
    <input type="tel" id="phone" name="tourist_phone" placeholder="498-348-3872" pattern=(\d{3})-?\s?(\d{3})-?\s?(\d{4}) required>
  </div>
  <hr>
  <div class="elem-group inlined">
    <label for="adult">Adults</label>
    <input type="number" id="adult" name="total_adults" placeholder="2" min="1" required>
  </div>
  <div class="elem-group inlined">
    <label for="child">Children</label>
    <input type="number" id="child" name="total_children" placeholder="2" min="0" required>
  </div>
  <div class="elem-group inlined">
    <label for="arrival-date">Arrival Date</label>
    <input type="date" id="arrival-date" name="arrival" required>
  </div>
  <div class="elem-group inlined">
    <label for="departure-date">Check-out Date</label>
    <input type="date" id="departure-date" name="departure" required>
  </div>
  <div class="elem-group">
    <label for="package-selection">Select Tour Package</label>
    <select id="package-selection" name="package_preference" required>
        <option value="">Choose a Tour Package from the List if you are interested</option>
        <option value="connecting">Connecting</option>
        <option value="adjoining">Adjoining</option>
        <option value="adjacent">Adjacent</option>
    </select>
  </div>
  <hr>
  <div class="elem-group">
    <label for="message">Special Notes</label>
    <textarea id="message" name="visitor_message" placeholder="Tell your guide all the important details about your trip including the places you want to visit, your dietary restrictions, special needs and so on." required></textarea>
  </div>
  <button type="submit">Book The Rooms</button>
</form>


</div>
<div class="dashend"> <?php include('../view/footer.php'); ?> </div>

</div>
</body>
</html>