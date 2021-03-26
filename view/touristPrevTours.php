<?php session_start();
$tours=array();
if(isset($_GET['param1'])){
    $tours=$_GET['param1'];
}?>
?>
<html  lang="en">
    <head>
        <title>Previous Tours</title>
        <link rel='stylesheet' type='text/css' media='screen' href='../resources/css/Guidedashboardpage.css'>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../resources/css/top_bar.css">
    <link rel="stylesheet" href="../resources/css/new_top_bar.css">
    <link rel="stylesheet" href="../resources/css/footer.css">
    <link rel="stylesheet" href="../resources/css/guideUpcomingTours.css">
    <link rel="stylesheet" href="../resources/css/guideMyPackages.css">
    <link rel="stylesheet" href="../resources/css/touristPrevTours.css">
  
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
                    
                    <form action="../controller/tourist_dashboard_controller.php" method="post">
                    <button class="edit" name="edit_profile"> <span>Edit Profile</span></button><br>
                    

                    

                  <div class="sidebar-menu">
                    <ul>

                    <li>
                        
                                <span class="menu-icon"><i class="fa fa-id-card-o" aria-hidden="true"></i></span>
                                <span class="menu-title">My Dashboard</span>
                            
                        </li>
                        <li>
                           
                                <span class="menu-icon"><i class="fa fa-comment-o" aria-hidden="true"></i></span>
                                <spn class="manu-title">Inbox</span>
                        
                        </li>

                        <li>
                           
                                <span class="menu-icon"><i class="fa fa-plus-square fa-1x" aria-hidden="true"></i></span>
                                <spn class="manu-title">Favourite Guides</span>
                          
                        </li>


                        <li>
                            
                                <span class="menu-icon"><i class="fa fa-eye fa-1x" aria-hidden="true"></i></span>
                                <spn class="manu-title">Favourite Packages</span>
                           
                        </li>

                        


                        <li>
                          
                                <span class="menu-icon"><i class="fa fa-fast-forward fa-1x" aria-hidden="true"></i></span>
                                <button type="submit" name="upcoming_tours" class="menu_title sidebar_button" >View Upcoming Tours</button>
                     
                        </li>


                        <li>
                         
                                <span class="menu-icon"><i class="fa fa-fast-backward fa-1x" aria-hidden="true"></i></span>
                                <button type="submit" name="previous_tours" class="menu_title sidebar_button" >View Previous Tours</button>
                      
                        </li>

                        <li>
                           
                                <span class="menu-icon"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>
                                <button type="submit" name="view_all_requests" class="menu_title sidebar_button" >View My Tour Requests</button>
                        
                        </li>

                    </ul>
                    </form>
                  </div><!--sidebar-manu-->        
                </div><!--side_bar-->
            
             <div class="content">
             <h1 class="page_title">Previous Tours</h1>
             <?php if($tours):?>
             <?php
            foreach($tours as $tour)
            ?>
             <div class="packages">
                    

<div class="tourPackage">

<!-- Start	Package details -->
<div class="package-details">

    <!-- 	Package Name -->
  
  
    
    <h4 style ="float:left; "><b>Guide Name: </b> <?php echo $tour['displayName']?></h4>


    
    


    <!-- Package bio -->
    <p class="information" >
    <p style="margin-left:50px; margin-top:10px; text-align:left; margin-top:30px"><b>Start Date:</b> <?php echo $tour['arrival_date']?></</p>
        <p style="margin-left:50px; margin-top:10px; text-align:left;"><b>End Date:</b> <?php echo $tour['departure_date']?></</p>
        <p style="margin-left:50px; margin-top:10px; text-align:left;"><b>Number of Adults:</b> <?php echo $tour['no_of_adults']?></</p>
        <p style="margin-left:50px; margin-top:10px; text-align:left;"><b>Number of Children:</b> <?php echo $tour['no_of_children']?></</p>
        <p style="margin-left:50px; margin-top:10px; text-align:left;"><b>Payment ($):</b> <?php echo $tour['price']?></</p>
        <p style="margin-left:50px; margin-top:10px; text-align:left;"><b>Special Notes:</b> <?php echo $tour['notes']?></p>
</p>


    <!-- 		Control -->
    <div class="controler">

        <!-- Start Button buying -->
        <button class="cobutton" > Contact Guide
               
</button>
<button class="cobutton" > Write a Review
               
</button>

        <!-- End Button buying -->

    </div>

</div>

<!-- 	End	Package details   -->


</div>
<!-- tourPackage2 -->

</div>
              <!-- end of packages -->


<?php else: ?>
<h2 style ="margin-left:100px; margin-top:50px;  " class="page_title">You do not have any previous tours to view</h2>
              
<?php endif ?> 

                <div class="corner_buttons">
                        <div>
                            <button class="cobutton" style="width:260px"><i class="fa fa-credit-card" aria-hidden="true" ></i>Make a Complain</button>
                        </div>

                        <div>
                            
                            <button class="cobutton" style="width:260px; margin-top:20px"><i class="fa fa-phone" aria-hidden="true"></i>Contact Ceylon Treck</button>
                        </div>
                </div><!--corner_button-->
</div>
                <div class="dashend"> <?php include('../view/footer.php'); ?> </div>
        <script src="../resources/js/guide dashboard.js"></script>

        </div>
    </body>
</html>