<?php session_start();
$tours=array();
if(isset($_GET['param'])){
    $tours=$_GET['param'];
}

?>
<html  lang="en">
    <head>
        <title>Upcoming Tours</title>
       
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../resources/css/top_bar.css">
    <link rel="stylesheet" href="../resources/css/new_top_bar.css">
    <link rel="stylesheet" href="../resources/css/footer.css">
    <link rel="stylesheet" href="../resources/css/guideUpcomingTours.css">
    <link rel="stylesheet" href="../resources/css/guideMyPackages.css">
    <link rel='stylesheet' type='text/css' media='screen' href='../resources/css/Guidedashboardpage.css'>
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
                <form action="../controller/guide_dashboard_controller.php" method="post">
                <button class="edit" name="edit_profile"><span>Edit Profile</span> </button><br>
               
                  
                <div class="sidebar-menu">
                <ul>

                <li>    
                        
                       
                            <span class="menu-icon"><i class="fa fa-eye fa-1x" aria-hidden="true"></i></span>
                            <span class="menu-title">My Dashboard</span>
                   
                        
                    </li>

                    <li>
                  
                            <span class="menu-icon"><i class="fa fa-comment-o" aria-hidden="true"></i></span>
                            <span class="menu-title">Inbox</span>
                     
                    </li>

                    <li>
                        
                            <span class="menu-icon"><i class="fa fa-plus-square fa-1x" aria-hidden="true"></i></span>
                            <!-- <span class="menu-title">Create My Profile</span> -->
                            <button type="submit" name="profile" class="menu_title sidebar_button" ">Create My Profile</button>
                        
                    </li>

                    <li>
                        
                            <span class="menu-icon"><i class="fa fa-plus-square fa-1x" aria-hidden="true"></i></span>
                            <button type="submit" name="package" class="menu_title sidebar_button" ">Create Tour Package</button>
                        
                    </li>

                    <li>
                   
                            <span class="menu-icon"><i class="fa fa-eye fa-1x" aria-hidden="true"></i></span>
                            <span class="menu-title">View My Profile</span>
                    
                    </li>

                    <li>
                       
                            <span class="menu-icon"><i class="fa fa-eye fa-1x" aria-hidden="true"></i></span>
                            <span class="menu-title">View My Tour Packages</span>
                        
                    </li>

                    <li>
                      
                            <span class="menu-icon"><i class="fa fa-fast-forward fa-1x" aria-hidden="true"></i></span>
                            <button type="submit" name="upcoming_tours" class="menu_title sidebar_button" ">View Upcoming Tours</button>
                        
                    </li>

                    <li>
                      
                            <span class="menu-icon"><i class="fa fa-fast-backward fa-1x" aria-hidden="true"></i></span>
                            <button type="submit" name="previous_tours" class="menu_title sidebar_button" ">View Previous Tours</button>
                        
                    </li>
                </ul>
                </div><!--sidebar-manu-->        
            </div><!--side_bar-->
                    </form>

             <div class="content">

            <h1 class="page_title">Previous Tours</h1>
            
             
             <div class="packages">

             <?php if($tours):?>

             <?php
            foreach($tours as $tour)
            ?>



<div class="tourPackage">

<!-- Start	Package details -->
<div class="package-details">

    <!-- 	Package Name -->
  
  
    <h4 style ="float:left; "><b>Name of Tourist: </b> <?php echo $tour['tourist_name']?></h4>
    

    
    


    <!-- Package bio -->
    <p class="information" >

        <p style="margin-left:50px; margin-top:10px; text-align:left; margin-top:30px"><b>Start Date:</b> <?php echo $tour['arrival_date']?></</p>
        <p style="margin-left:50px; margin-top:10px; text-align:left;"><b>End Date:</b> <?php echo $tour['departure_date']?></</p>
        <p style="margin-left:50px; margin-top:10px; text-align:left;"><b>Tourist Email:</b> <?php echo $tour['tourist_email']?></</p>
        <p style="margin-left:50px; margin-top:10px; text-align:left;"><b>Tourist Contact Number:</b> <?php echo $tour['telephone']?></</p>
        <p style="margin-left:50px; margin-top:10px; text-align:left;"><b>Number of Adults:</b> <?php echo $tour['no_of_adults']?></</p>
        <p style="margin-left:50px; margin-top:10px; text-align:left;"><b>Number of Children:</b> <?php echo $tour['no_of_children']?></</p>
        <p style="margin-left:50px; margin-top:10px; text-align:left;"><b>Payment ($):</b> <?php echo $tour['price']?></</p>
        <p style="margin-left:50px; margin-top:10px; text-align:left;"><b>Special Notes:</b> <?php echo $tour['notes']?></p>
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
<?php else: ?>
<h2 style ="margin-left:400px; margin-top:50px;  " class="page_title">You do not have any Upcoming tours to view</h2>
<?php endif ?>   
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