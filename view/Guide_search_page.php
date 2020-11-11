<!DOCTYPE html>
<html>
<head>
   <title>Search Tour Guide</title>
  
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="../resources/css/top_bar.css">
   <link rel="stylesheet" href="../resources/css/footer.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../resources/css/guide_searchpage.css">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
</head>
<body>
<?php include('../view/top_bar.php'); ?> 
   <div class="header" >

   
      <form>
      	<div class="container">
      	<div class="form-box">
            <h1>Search Tour Guide</h1>
      		
   				<input class="search destinations" type="text" name="destinations" id="" placeholder="Destinations">
   			

   				<input class="search arrivaldate" type="text" name="arrivaldate" id="" placeholder="Arrival_Date(DD/MM/YY)">
   			

   				<input class="search departuredate" type="text" name="departuredate" id="" placeholder="Departure_Date(DD/MM/YY)">
   			
   			
   				<input class="search numoftourist" type="text" name="numoftourist" id="" placeholder="Number_Of_Tourist">

   			
   				<button class="Search-btn" type="button"><a style="color:white; text-decoration:none;" href='tourGuideSearchResults.php'>SEARCH</a></button>

               <br><br>

               <div class="check-box">
      
                  <input type="checkbox" name="" id="Guide with vehicles">
                  <label for="Guide with vehicles">Guide with vehicles</label>

                  <input type="checkbox" name="" id="Round Trip Guides">
                  <label for="Round Trip Guides">Round Trip Guides</label>

                  <input type="checkbox" name="" id="Per-Day Guides">
                  <label for="Per-Day Guides">Per-Day Guides</label>

               </div><!--check-box-->
                 <br><br><br><br>
                 <button class="seeall-button"><a style="color:white; text-decoration:none;" href='tourGuideSearchResults.php'>SEE ALL Guides</a></button>
      	</div><!--form-box-->


      </form>
</div>
   </div><!--header-->
   <?php include('../view/footer.php'); ?>
</body>
</html>