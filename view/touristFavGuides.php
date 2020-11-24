<?php session_start();?>
<html  lang="en">
    <head>
        <title>Favourite Guides</title>
        <link rel='stylesheet' type='text/css' media='screen' href='../resources/css/Guidedashboardpage.css'>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../resources/css/top_bar.css">
    <link rel="stylesheet" href="../resources/css/new_top_bar.css">
    <link rel="stylesheet" href="../resources/css/footer.css">
    <link rel="stylesheet" href="../resources/css/tourGuideSearchResults.css">
    <link rel="stylesheet" href="../resources/css/guideMyPackages.css">
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
    }?>
                <div class="side_bar">
                    <img src="img/home/logo2.png" class="dashlogo">
                    <img src="img/reviewimg.jpg" class="profile" >
                    <button class="edit"> Edit Profile</button><br>
                  <div class="sidebar-menu">
                  <ul>

                        <li>
                                <a href="touristDashboard.php">
                                    <span class="menu-icon"><i class="fa fa-id-card-o" aria-hidden="true"></i></span>
                                    <span class="menu-title">My Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="Inbox.php">
                                    <span class="menu-icon"><i class="fa fa-comment-o" aria-hidden="true"></i></span>
                                    <spn class="manu-title">Inbox</span>
                                </a>
                            </li>

                            <li>
                                <a href="touristFavGuides.php">
                                    <span class="menu-icon"><i class="fa fa-plus-square fa-1x" aria-hidden="true"></i></span>
                                    <spn class="manu-title">Favourite Guides</span>
                                </a>
                            </li>


                            <li>
                                <a href="touristFavPackages.php">
                                    <span class="menu-icon"><i class="fa fa-eye fa-1x" aria-hidden="true"></i></span>
                                    <spn class="manu-title">Favourite Packages</span>
                                </a>
                            </li>

                            


                            <li>
                                <a href="upcomingTours.php">
                                    <span class="menu-icon"><i class="fa fa-fast-forward fa-1x" aria-hidden="true"></i></span>
                                    <spn class="manu-title">Upcoming Tours</span>
                                </a>
                            </li>


                            <li>
                                <a href="touristPrevTours.php">
                                    <span class="menu-icon"><i class="fa fa-fast-backward fa-1x" aria-hidden="true"></i></span>
                                    <spn class="manu-title">Previous Tours</span>
                                </a>
                            </li>

                            <li>
                                <a href="../controller/my_all_request_controller.php">
                                    <span class="menu-icon"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>
                                    <spn class="manu-title">My All Request</span>
                                </a>
                            </li>

                        </ul>
                  </div><!--sidebar-manu-->        
                </div><!--side_bar-->

                <div class="calendar">
                <div class="guidecalender">
                    <div class="month">
                        <i class="fa fa-caret-left prev" aria-hidden="true"></i>
                        <div class="date"><h2></h2><h3></h3><p></p></div>
                        <i class="fa fa-caret-right next" aria-hidden="true"></i>
                    </div><!--month-->  
                    
                    <div class="weekdays">
                        <div>Sun</div>
                        <div>Mon</div>
                        <div>Tue</div>
                        <div>Wed</div>
                        <div>Thu</div>
                        <div>Fri</div>
                        <div>Sat</div>
                    </div><!--weeekdays-->
                             
                    <div class="days">
                              
                    </div><!--days-->
                </div><!--guidecalender-->
                </div>
                <!-- end of calendar -->
             <div class="content">
               
             <div class="packages">
                    
               
             <div class="tourGuide">

<!-- Start	Guide details -->
<div class="guide-details">

    <!-- 	guide Name -->
    <h1>Chathura Rathnayake</h1>

    <span class="hint-star star">
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star-half-o" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>
</span>


    <!-- Guide bio -->
    <p class="information">
        I'm an experienced Tour Guide who has been working in the industry for almost a decade. I have completed more than 250 local tours and more than 100 international tours. With reasonable prices and high quality service you will never regret choosing me
        as your travel guide and friend from Sri Lanka.
    </p>



    <!-- 		Control -->
    <div class="control">

        <!-- Start Button buying -->
        <button class="btn"><span> View More</span>
               
</button>
        <!-- End Button buying -->

    </div>

</div>

<!-- 	End	guide details   -->



<!-- 	Start guide image & Information -->

<div class="guide-image">

    <img src="img/guideresult/1.jpg" alt="Omar Dsoky">

</div>
<!--  End guide image  -->


</div>
<!-- tourGuide1 -->

<div class="tourGuide">

<!-- Start	Guide details -->
<div class="guide-details">

    <!-- 	guide Name -->
    <h1>Iranga Mudalige</h1>

    <span class="hint-star star">
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star-half-o" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>
</span>


    <!-- Guide bio -->
    <p class="information">
        I'm an experienced Tour Guide who has been working in the industry for almost a decade. I have completed more than 250 local tours and more than 100 international tours. With reasonable prices and high quality service you will never regret choosing me
        as your travel guide and friend from Sri Lanka.
    </p>



    <!-- 		Control -->
    <div class="control">

        <!-- Start Button buying -->
        <button class="btn"><span> View More</span>
             
</button>
        <!-- End Button buying -->

    </div>

</div>

<!-- 	End	guide details   -->



<!-- 	Start guide image & Information -->

<div class="guide-image">

    <img src="img/guideresult/2.jpg" alt="Omar Dsoky">

</div>
<!--  End guide image  -->


</div>
<!-- tourGuide2 -->
<div class="tourGuide">

<!-- Start	Guide details -->
<div class="guide-details">

    <!-- 	guide Name -->
    <h1>Chathura Rathnayake</h1>

    <span class="hint-star star">
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star-half-o" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>
</span>


    <!-- Guide bio -->
    <p class="information">
        I'm an experienced Tour Guide who has been working in the industry for almost a decade. I have completed more than 250 local tours and more than 100 international tours. With reasonable prices and high quality service you will never regret choosing me
        as your travel guide and friend from Sri Lanka.
    </p>



    <!-- 		Control -->
    <div class="control">

        <!-- Start Button buying -->
        <button class="btn"><span> View More</span>
               
</button>
        <!-- End Button buying -->

    </div>

</div>

<!-- 	End	guide details   -->



<!-- 	Start guide image & Information -->

<div class="guide-image">

    <img src="img/guideresult/1.jpg" alt="Omar Dsoky">

</div>
<!--  End guide image  -->

            </div>
              <!-- end of packages -->
</div>

                <div class="corner_buttons">
                        <div>
                            <button class="cobutton" style="width:260px"><i class="fa fa-credit-card" aria-hidden="true"></i>Make a Complain</button>
                        </div>

                        <div>
                            
                            <button class="cobutton" style="width:260px; margin-top:20px"><i class="fa fa-phone" aria-hidden="true"></i>Contact Ceylon Treck</button>
                        </div>
                </div><!--corner_button-->
</div>
                <div class="dashend"> <?php include('../view/footer.php'); ?> </div>
        <script src="js/guide dashboard.js"></script>

        </div>
    </body>
</html>