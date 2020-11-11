<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour Guide Profile</title>
    <link rel="stylesheet" href="../resources/css/homepage.css">
    <link rel="stylesheet" href="../resources/css/tourGuideProfile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../resources/js/guideProfile.js"></script> 
</head>

<body style="background-color:whitesmoke">
    <div class="container">


    <?php include('../view/new_top_bar.php'); ?>


        <div class="sidenav">
            <h2 style="margin-left: 20px; margin-bottom:-20px;">Reviews</h2>
            
            

          <div class="wrapper relative">
          
          <span class="client-name">Ricky Ponting</span>
          <span class="client-country">Australia</span>
          <div class="testimonial-content">
          Chathura was probably the best tour guide we met in Sri Lanka. His prices were great and his service was great. will meet him soon.
          </div>
          <a href="url" class="viewmore">View More....</a>
          </div>


            <div class="wrapper relative">
          
            <span class="client-name">Chris Gayle</span>
            <span class="client-country">West Indies</span>
            <div class="testimonial-content">
            Chathura was probably the best tour guide we met in Sri Lanka. His prices were great and his service was great. will meet him soon.
            </div>
            <a href="url" class="viewmore">View More....</a>
            </div>

            <div class="wrapper relative">
          
          <span class="client-name">Anil Kumble</span>
          <span class="client-country">India</span>
          <div class="testimonial-content">
          Chathura was probably the best tour guide we met in Sri Lanka. His prices were great and his service was great. will meet him soon.
          </div>
          <a href="url" class="viewmore">View More....</a>
          </div>

          <div class="wrapper relative">
          
          <span class="client-name">Ricky Ponting</span>
          <span class="client-country">Australia</span>
          <div class="testimonial-content">
          Chathura was probably the best tour guide we met in Sri Lanka. His prices were great and his service was great. will meet him soon.
          </div>
          <a href="url" class="viewmore">View More....</a>
          </div>

          <button class="loginbutton" style="width:200px; margin-right:60px"><span><a style="color:white; text-decoration:none;" href='Guide_all_reviews.php'>View All Reviews</a></span></button>
        


            
            
            
        </div>
        <!-- sidenav -->
        <div class="guideInfo">
            
        
            <div class="guidewrapper ">
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
            <button class="loginbutton"style="height:65px; margin-left:0px"><span>Reserve Guide</span></button>
</div>

         <!-- end of guide info -->

            <div class="info">
    
                    <!-- Slideshow container -->
            <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
            <img src="../resources/img/guideProfile/1.jpg" style="width:640px; height:380px">
            
            </div>

            <div class="mySlides fade">
            
            <img src="../resources/img/guideProfile/2.jpg" style="width:640px ;height:380px">
            
            </div>

            <div class="mySlides fade">
            
            <img src="../resources/img/guideProfile/3.jpg" style="width:640px ;height:380px">
            
            </div>

            <div class="mySlides fade">
            
            <img src="../resources/img/guideProfile/4.jpg" style="width:640px ;height:380px">
            
            </div>

            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>
        
            <!-- The dots/circles -->
            <div class="circles"> <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            </div> </div>

            <!-- end of slideshow-container -->

            <div class="guide-bio">
                <p><b><h4>Hello! Bonjour! Guten tag! Ayubowan!! I'm Chathura Rathnayake</h4></b></p>
                <p >Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                <p>So choose me as your Tour Guide to travel in the Paradise Island.</p>
                <h2 style="margin-top: 20px;  font-weight:bold;">Tour Packages offered by Chathura :</h2>
            </div>

           <!-- start of tour packages -->
          

           <div class="card">
                <img src="../resources/img/guideProfile/packages/2.jpg" 
                 style="width:640px ;height:380px">
                <h1>Down South Adventure</h1>
               
                <p>Great Beaches, Great sea food, Great Nights..</p>
                <p><button><a style="color:white; text-decoration:none;" href='tourPackage.php'>View Package >></a></button></p>
                </div> 
                
                 
                <div class="card">
                <img src="../resources/img/guideProfile/packages/3.jpg"  style="width:640px ;height:380px">
                <h1>Colombo in a Day</h1>
               
                <p>Explore the Capital of three Sri Lanka in a single day..</p>
                <p><button>View Package >></button></p>
                </div> 
                       
                        <div class="card">
                <img src="../resources/img/guideProfile/packages/1.jpg"  style="width:640px ;height:380px">
                <h1>Badulla, Bandarawela Tour and Hike</h1>
               
                <p>Get a glimpse of the best scenery and greenery Sri Lanka has to offer in three days..</p>
                <p><button>View Package >></button></p>
                </div> 

                


                <!-- end of tour packages -->
            </div>
    <!-- end of info -->
    <div class="dashend"> <?php include('../view/footer.php'); ?> </div>

    </div>
    <!-- container -->


    <script>
  showSlides(slideIndex);
  
</script>
</body>

</html>>