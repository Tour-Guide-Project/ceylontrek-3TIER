<?php session_start();?>
<html  lang="en">
    <head>
        <title>Upcoming Tours</title>
        <link rel='stylesheet' type='text/css' media='screen' href='../resources/css/Guidedashboardpage.css'>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../resources/css/top_bar.css">
    <link rel="stylesheet" href="../resources/css/new_top_bar.css">
    <link rel="stylesheet" href="../resources/css/footer.css">
    <link rel="stylesheet" href="../resources/css/guideUpcomingTours.css">
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
    }
    ?> 
                <div class="side_bar">
                    <img src="../resources/img/home/logo2.png" class="dashlogo">
                    <img src="../resources/img/reviewimg.jpg" class="profile" >
                    <form action="../controller/guide_dashboard_controller.php" method="post">
                    <button class="edit"> Edit Profile</button><br>
                  <div class="sidebar-menu">
                  <ul>

                  <li>
                            <a href="guideDashboard.php">
                                <span class="menu-icon"><i class="fa fa-eye fa-1x" aria-hidden="true"></i></span>
                                <span class="menu-title">My Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="Inbox.php">
                                <span class="menu-icon"><i class="fa fa-comment-o" aria-hidden="true"></i></span>
                                <span class="menu-title">Inbox</span>
                            </a>
                        </li>

                        <li>
                            <a>
                                <span class="menu-icon"><i class="fa fa-plus-square fa-1x" aria-hidden="true"></i></span>
                                <input type="submit" name="profile" value="Create My Profile" >
                            </a>
                        </li>

                        <li>
                            <a href="CreateTourPackagePage.php">
                                <span class="menu-icon"><i class="fa fa-plus-square fa-1x" aria-hidden="true"></i></span>
                                <span class="menu-title">Create tour package</span>
                            </a>
                        </li>

                        <li>
                            <a href="tourGuideProfile.php">
                                <span class="menu-icon"><i class="fa fa-eye fa-1x" aria-hidden="true"></i></span>
                                <span class="menu-title">View My Profile</span>
                            </a>
                        </li>

                        <li>
                            <a href="guideMyPackages.php">
                                <span class="menu-icon"><i class="fa fa-eye fa-1x" aria-hidden="true"></i></span>
                                <span class="menu-title">View My Tour Packages</span>
                            </a>
                        </li>

                        <li>
                            <a href="guideUpcomingTours.php">
                                <span class="menu-icon"><i class="fa fa-fast-forward fa-1x" aria-hidden="true"></i></span>
                                <span class="menu-title">Upcoming Tours</span>
                            </a>
                        </li>

                        <li>
                            <a href="guideUpcomingTours.php">
                                <span class="menu-icon"><i class="fa fa-fast-backward fa-1x" aria-hidden="true"></i></span>
                                <span class="menu-title">Previous Tours</span>
                            </a>
                        </li>
                    </ul>
                  </div><!--sidebar-manu-->        
                </div><!--side_bar-->
                    </form>

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
                    
                <div class="tourPackage">

<!-- Start	Package details -->
<div class="package-details">

    <!-- 	Package Name -->
 
    <h4 style ="float:left; "><b>Tourist Name: </b>Justin Timberlake</h4>
    <h4 style="padding-left:450px">No. of Days : 4</h4>
    


    <!-- Package bio -->
    <p class="information">
    <p style="margin-left:50px; margin-top:10px; text-align:left; margin-top:30px"><b>Start Date:</b> 23/04/2020</p>
        <p style="margin-left:50px; margin-top:10px; text-align:left;"><b>End Date:</b> 23/04/2020</p>
        <p style="margin-left:50px; margin-top:10px; text-align:left;"><b>Payment:</b> USD 50</p>
        <p style="margin-left:50px; margin-top:10px; text-align:left;"><b>Special Notes:</b> Allergy to fur. Please avoid visiting places where i contaminate with animal fur.</p>
    </p>



    <!-- 		Control -->
    <div class="control">

        <!-- Start Button buying -->
        <<button class="cobtn" >Contact Tourist
               
               </button>
               
        <!-- End Button buying -->

    </div>

</div>

<!-- 	End	Package details   -->



</div>
<!-- tourPackage1 -->

<div class="tourPackage">

<!-- Start	Package details -->
<div class="package-details">

    <!-- 	Package Name -->
  
  
    <h4 style ="float:left; "><b>Name of Tourist: </b> Matt Leblanc</h4>
    <h4 style="padding-left:450px">No. of Days : 4</h4>

    
    


    <!-- Package bio -->
    <p class="information" >
        <p style="margin-left:50px; margin-top:10px; text-align:left; margin-top:30px"><b>Start Date:</b> 23/04/2020</p>
        <p style="margin-left:50px; margin-top:10px; text-align:left;"><b>End Date:</b> 23/04/2020</p>
        <p style="margin-left:50px; margin-top:10px; text-align:left;"><b>Payment:</b> USD 50</p>
        <p style="margin-left:50px; margin-top:10px; text-align:left;"><b>Special Notes:</b> I'm a Vegetarian . So please make a meal plan that will not hinder my preferences</p>
    </p>



    <!-- 		Control -->
    <div class="control">

        <!-- Start Button buying -->
        <button class="cobtn" ><span> Contact Tourist</span>
               
</button>

        <!-- End Button buying -->

    </div>

</div>

<!-- 	End	Package details   -->






</div>
<!-- tourPackage2 -->
            </div>
              <!-- end of packages -->
              
        

                <div class="corner_buttons">
                        <div>
                            <button class="cobutton" style="width:275px"><i class="fa fa-credit-card" aria-hidden="true" ></i>Pay System fee</button>
                        </div>

                        <div>
                            
                            <button class="cobutton" style="margin-top:20px; width:275px"><i class="fa fa-phone" aria-hidden="true"></i>Contact Ceylon Treck</button>
                        </div>
                </div><!--corner_button-->
</div>
                <div class="dashend"> <?php include('../view/footer.php'); ?> </div>
        <script src="../resources/js/guide dashboard.js"></script>

        </div>
    </body>
</html>