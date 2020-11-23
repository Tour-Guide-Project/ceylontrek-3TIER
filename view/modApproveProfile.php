<?php session_start();?>
<html  lang="en">
    <head>
        <title>Moderator Approve Profile</title>
       
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../resources/css/top_bar.css">
    <link rel="stylesheet" href="../resources/css/new_top_bar.css">
    <link rel="stylesheet" href="../resources/css/footer.css">
    <link rel="stylesheet" href="../resources/css/modApproveProfile.css">
   
    
    <link rel="stylesheet" type="text/css" href="../resources/css/admin_dashboard.css">
	<link rel="stylesheet" type="text/css" href="../resources/css/Guidedashboardpage.css">

    <script src="../resources/js/guideProfile.js"></script> 

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body class="body">
    <div class="dashnav"></div>
            <div class="section1"> 
            <?php 
    if (!isset($_SESSION['id'])){
        include('../view/top_bar.php');
    }else{
        include('../view/new_top_bar.php');
    }
    ?> 
               
	<div class="side_bar">
        <img src="../resources/img/logo2.png" class="dashlogo">
        <img src="../resources/img/reviewimg.jpg" class="profile" >
		<button class="edit"><a style="color:white;" href="view_moderator_profile.php"><span>Edit Profile</span></a></button><br>
        
            <div class="sidebar-menu">
              <ul>
                  <li>
                      <a href="#">
                          <span class="menu-icon"><i class="fa fa-comment-o" aria-hidden="true"></i></span>
                          <span class="menu-title">Inbox</span>
                      </a>
                  </li>
				  <li>
                        <a href="#">
                            <span class="menu-icon"><i class="fa fa-folder-open fa-1x" aria-hidden="true"></i></span>
                            <span class="menu-title">Pending Profiles</span>
                        </a>
                    </li>

                   <li>
                       <a href="#">
                           <span class="menu-icon"><i class="fa fa-question-circle fa-1x" aria-hidden="true"></i></span>
                           <span class="menu-title">Complains</span>
                       </a>
                   </li>


                  


                    <li>
                        <a href="#">
                            <span class="menu-icon"><i class="fa fa-fast-forward fa-1x" aria-hidden="true"></i></span>
                            <span class="menu-title">View all Guides</span>
                        </a>
                    </li>


                    <li>
                        <a href="#">
                            <span class="menu-icon"><i class="fa fa-fast-forward fa-1x" aria-hidden="true"></i></span>
                            <span class="menu-title">View all Tourists</span>
                        </a>
                    </li>
              </ul>
            </div><!--sidebar-manu-->        
	</div><!--side_bar-->
                
    
    <div class="content">
                <div class="guideInfo">
            
        
            <div class="guidewrapper ">
            <div class="avtar"><img src="../resources/img/guide/1.jpg" alt="user-avtar" width="100%"/></div>
            <span class="guide-name">Chathura Rathnayake</span>
            
            
            
            <div class="guide-content">
           <ul>
                <li>NIC: 864828498v</li>
                <li>Reg. Number :985564</li>
                <li>Contact:0718967543</li>
                <li>Vehicle Reg Number: CAD-8945</li>
               <li>Years of Experience : 6</li>
    
               <li>Fluent Languages: <ul><li>English</li>
            <li>Spanish</li>
        <li>Dutch</li></ul></li>
           </ul>
            </div>
           
            </div>
            <button class="loginbutton" style="height:65px; margin-right:115px"><span>Decline Profile</span></button>
            <button class="loginbutton"style="height:65px; margin-left:0px"><span>Approve Profile</span></button>
            <button class="loginbutton"style="height:65px; margin-left:0px; margin-right:285px; margin-top:10px"><span>Message Guide</span></button>
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
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                <p>So choose me as your Tour Guide to travel in the Paradise Island.</p>
                <h2 style="margin-top: 20px;  font-weight:bold;">Tour Packages offered by Chathura :</h2>
            </div>

           <!-- start of tour packages -->
          
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

                <div class="card">
                <img src="../resources/img/guideProfile/packages/2.jpg" 
                 style="width:640px ;height:380px">
                <h1>Down South Adventure</h1>
               
                <p>Great Beaches, Great sea food, Great Nights..</p>
                <p><button>View Package >></button></p>
                </div> 


                <!-- end of tour packages -->
            </div>
    <!-- end of info -->
    </div>
    <!-- end of content -->

                <div class="dashend"> <?php include('../view/footer.php'); ?> </div>
        <script src="../resources/js/guide dashboard.js"></script>
        showSlides(slideIndex);
        </div>
    </body>
</html>