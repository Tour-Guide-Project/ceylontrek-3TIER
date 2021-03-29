<?php session_start();

?>
<!DOCTYPE html>
<html>
<head>
   <title>Search Tour Guide</title>
  
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="../resources/css/top_bar.css">
   <link rel="stylesheet" href="../resources/css/new_top_bar.css">
   <link rel="stylesheet" href="../resources/css/footer.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../resources/css/guide_searchpage.css">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    
</head>
<body>
<?php 
    if (!isset($_SESSION['id'])){
        include('../view/top_bar.php');
    }else{
        include('../view/new_top_bar.php');
    }
   
    ?>
   <div class="header" >

   
      <form action="../controller/search_guide_controller.php" method="POST">
      	<div class="container">
      	<div class="form-box">
            <h1>Search Tour Guide</h1>
      		
   				
            <?php
                $datetime = new DateTime('tomorrow');
               
                ?>
               <label for="arrivaldate" style="margin-left:40px;  font-size:20px;">Arrival Date: </label>
   				<input class="search arrivaldate" type="text" name="arrivaldate" id="arrivaldate"  >
              
        
               <label for="arrivaldate" style="margin-left:40px; font-size:20px;">Departure Date: </label>
   				<input class="search departuredate" type="text" name="departuredate" id="departuredate"  >
   			
   			
   				<input class="search numoftourist" type="text" name="numoftourist" id="" placeholder="Number_Of_Tourist">

   			
   				<button class="Search-btn" type="button"><a style="color:white; text-decoration:none;" href='tourGuideSearchResults.php'>SEARCH</a></button>

               <br><br>

              
                 <br><br><br><br>
                 <!-- <button class="seeall-button"><a style="color:white; text-decoration:none;" href='tourGuideSearchResults.php'>SEE ALL Guides</a></button> -->
                 <!-- <input type="button" value="SEE ALL GUIDES" name="seeAllGuides" class="seeall-button"> -->
                <input type="submit" value="SEE ALL GUIDES" class="seeall-button" id="seeAllGuides" name="seeAllGuides">
      	</div><!--form-box-->


      </form>
</div>
   </div><!--header-->
   <?php include('../view/footer.php'); ?>

   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js" type="text/javascript"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"
type="text/javascript"></script>
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css"
rel="Stylesheet"type="text/css"/>
<script type="text/javascript">
$(function () {
    $("#arrivaldate").datepicker({
        numberOfMonths: 1,
        minDate: 0,
        onSelect: function (selected) {
            var dt = new Date(selected);
            dt.setDate(dt.getDate() + 1);
            $("#departuredate").datepicker("option", "minDate", dt);
        }
    });
    $("#departuredate").datepicker({
        numberOfMonths: 1,
        onSelect: function (selected) {
            var dt = new Date(selected);
            dt.setDate(dt.getDate() - 1);
            $("#arrivaldate").datepicker("option", "maxDate", dt);
        }
    });
});
</script>

</body>
</html>