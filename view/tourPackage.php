<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour Packages </title>
    <link rel="stylesheet" href="../resources/css/homepage.css">
    <link rel="stylesheet" href="../resources/css/tourGuideProfile.css">
    <link rel="stylesheet" href="../resources/css/tourPackage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../resources/js/guideProfile.js"></script> 
</head>

<body style="background-color:white">
    <div class="container">


    <?php include('../view/new_top_bar.php'); ?>


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

          <button class="loginbutton" style="width:200px; margin-right:60px"><span>View All Reviews</span></button>
        


            
          
            
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
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
               <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut, ipsum quis ab dignissimos fuga quidem cumque maxime veritatis illum, iure, necessitatibus asperiores eius? Laborum veniam quod delectus fuga sit soluta.</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio quam quis aut debitis, corporis ex at dolore tempore, deleniti repellendus sed sequi. Sequi labore accusantium vel iste pariatur enim officiis?</p>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto tempora ad corrupti, et aperiam consectetur ullam consequuntur corporis omnis eius cumque veniam sapiente voluptatum ab est laborum tempore reiciendis nesciunt.</p>
                <p>So choose me as your Tour Guide to travel in the Paradise Island.</p>

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