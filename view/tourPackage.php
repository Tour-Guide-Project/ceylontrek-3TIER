<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour Packages </title>
    <link rel="stylesheet" href="../resources/css/homepage.css">
    <link rel="stylesheet" href="../resources/css/tourPackage.css">
    <link rel="stylesheet" href="../resources/css/top_bar.css">
    <link rel="stylesheet" href="../resources/css/footer.css">
    <link rel="stylesheet" href="../resources/css/new_top_bar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../resources/js/guideProfile.js"></script> 
</head>

<body style="background-color:white">
    <div class="container">


    <?php 
    if (!isset($_SESSION['id'])){
        include('../view/top_bar.php');
    }else{
        include('../view/new_top_bar.php');
    }
    ?> 


        <div class="sidenav">
            <h2 style="margin-left: 20px;">Reviews</h2>
            
            

          <div class="wrapper relative">
          
          <span class="client-name">Ricky Ponting</span>
          <span class="client-country">Australia</span>
          <div class="testimonial-content">
          The package was great. Totally worth the price.
          </div>
          <a href="url" class="viewmore">View More....</a>
          </div>


            <div class="wrapper relative">
          
            <span class="client-name">Chris Gayle</span>
            <span class="client-country">West Indies</span>
            <div class="testimonial-content">
            Highly recommend the package. Chathura had a good understanding about the tour. 
            </div>
            <a href="url" class="viewmore">View More....</a>
            </div>

            <div class="wrapper relative">
          
          <span class="client-name">Anil Kumble</span>
          <span class="client-country">India</span>
          <div class="testimonial-content">
          Good hotels. good food. great accomodation. totally worth it.
          </div>
          <a href="url" class="viewmore">View More....</a>
          </div>

          <div class="wrapper relative">
          
          <span class="client-name">Ricky Ponting</span>
          <span class="client-country">Australia</span>
          <div class="testimonial-content">
          Great tour package. will definetly try the other packages of the guide. great communication.
          </div>
          <a href="url" class="viewmore">View More....</a>
          </div>

          <button class="loginbutton" style="width:200px; margin-right:60px"><span><a style="color:white; text-decoration:none;" href='package_review.php'>View All Reviews</span></button>
        


            
          
            
        </div>
        <!-- sidenav -->

        <div class="guideInfo" >
            
        
            <div class="guidewrapper guiderelative">
            <div class="avtar"><img src="../resources/img/guide/1.jpg" alt="user-avtar" width="100%"/></div>
            <span class="guide-name">Chathura Rathnayake</span>
            
            <div class="star-rating">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            

            </div>
            <div class="guide-content">
           <ul>
               <li>Trips Completed : 45</li>
               <li>Years of Experience : 6</li>
               <li>Four Star Rated Tours : 30</li>
               <li>Fluent Languages: <ul><li>English</li>
            <li>Spanish</li>
        <li>Dutch</li></ul></li>
           </ul>
            </div>
            
            </div>
            <button class="loginbutton" style="height:65px; margin-left:5px"><span>Message Guide</span></button>
            <button type="button" onclick="openForm()" class="loginbutton"style="height:65px; margin-left:0px"><span>Reserve Package</span></button>

             <!-- make reservation popup window -->
           <div class="form-popup" id="myForm">
              <form action="tourPackage.php" class="form-container">
                <span><b>Tour Begin Date :</b></span>
                <input type="text"  required="">
        
                <span ><b>Tour End Date :</b></span>
                <input type="text"  required="">

                <span for="title"><b>Credit Card No :</b></span>
                <input type="text"  required="">
        
                <span ><b>Date Of Expiration :</b></span>
                <input type="text"   required="">

                <span ><b>CVV :</b></span>
                <input type="text"   required="">

                <div class="check_reservation">
                    <input type="checkbox" id="check" name="reservation" required="">
                    <label for="check"> "I accept the Terms of Service "or" I accept the privacy statement" Click here the indicate that you have read and agree to the terms presented in the Terms and Conditions agreement.</label>
                </div>
        
                <button type="submit" class="btn">Submit</button>
                <button type="button" class="btn cancel" onclick="closeForm()">Cancel</button>
             </form>
          </div>

        <script>
          function openForm() {
              document.getElementById("myForm").style.display = "block";
         }

         function closeForm() {
             document.getElementById("myForm").style.display = "none";
         }
        </script>
        <!-- make reservation popup window -->


         </div>
         <!-- end of guide info -->

            <div class="info">

            <div class="topic">
                <p><b><h4>The Down South Adventure</h4></b></p>
             
            </div>
            
    
                    <!-- Slideshow container -->
            <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
            <img src="../resources/img/packages/1.jpg" style="width:640px; height:380px">
            
            </div>

            <div class="mySlides fade">
            
            <img src="../resources/img/packages/2.jpg" style="width:640px ;height:380px">
            
            </div>

            <div class="mySlides fade">
            
            <img src="../resources/img/packages/3.jpg" style="width:640px ;height:380px">
            
            </div>

            <div class="mySlides fade">
            
            <img src="../resources/img/packages/4.jpg" style="width:640px ;height:380px">
            
            </div>

            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>
            <div class="circles"><div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            </div> </div>
            <!-- The dots/circles -->
            

            <!-- end of slideshow-container -->

            <div class="guide-bio">
                <p><b><h4></h4></b></p>
                <p>Lets explore the golden beaches of Sri Lanka, have an authentic sea food platter at a 4 star restaurent by the sea and have some classy shopping in the classic outlets at the Galle Fort</p>
                <p><b>Day 1:</b></br> Breakfast at hotel. Exploring the Galle fort.Shopping. Lunch at a Four star hotel. Evening exploring Galle. Dinner at Galle Fort </p>
                <p><b>Day 2:</b></br>Breakfast at hotel. Boat ride exploring Coral reefs. Lunch at a four star hotel. Evening on your own. Dinner at hotel.</p>
                <p><b>Day 3:</b></br>Breakfast at hotel. Full day at Unawatuna Beach. Lunch and Dinner at Hotel</p>
                <p><b>Day 4:</b></br>Breakfast at hotel. Tuk Tuk ride around Matara. Lunch at Matara. Evening at Tangalle Beach.</p>
                <p>Tour can be customized according to your will. Please contact me for more details.</p>
                <p><b>About Me: </b>I'm an experienced Tour Guide who has been working in the industry for almost a decade. I have completed more than 250 local tours and more than 100 international tours. With reasonable prices and high quality service you will never regret choosing me as your travel guide and friend from Sri Lanka.</p>
            </div>

          
                



<div class="swipe"></div>

    </div>
    <!-- end of info -->
    <div class="dashend"> <?php include('../view/footer.php'); ?> </div>
    </div>
    <!-- container -->
   
    <script>
  showSlides(slideIndex);
  
</script>
</body>
<script type="text/javascript" src="../resources/js/jscript.js"></script>
</html>>