<?php session_start();?>
<html  lang="en">
    <head>
        <title>Favourite Tour Packages</title>
        <link rel='stylesheet' type='text/css' media='screen' href='../resources/css/Guidedashboardpage.css'>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../resources/css/top_bar.css">
    <link rel="stylesheet" href="../resources/css/new_top_bar.css">
    <link rel="stylesheet" type="text/css" href="../resources/css/my_all_request.css">
    <link rel="stylesheet" href="../resources/css/footer.css">
    <link rel="stylesheet" href="../resources/css/tourPackageSearchResults.css">
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
                <?php

                if($_SESSION['level']=='tourist'){
                    include('../view/tourist_side_bar.php');
                }
                if($_SESSION['level']=='tourguide'){
                    include('../view/guide_side_bar.php');
                }

             ?>
                
             <div class="content">
               
             <div class="packages">
                    
                <div class="tourPackage">

<!-- Start	Package details -->
<div class="package-details">

    <!-- 	Package Name -->
    <h1>The Best of Colombo</h1>
    <h4 style ="float:left">Chathura Rathnayake</h4>
    <h4 style="padding-left:450px">No. of Days : 4</h4>

    <span class="hint-star star" >
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star-half-o" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>
</span>


    <!-- Package bio -->
    <p class="information">
        I'm an experienced Tour Package who has been working in the industry for almost a decade. I have completed more than 250 local tours and more than 100 international tours. With reasonable prices and high quality service you will never regret choosing me
        as your travel Package and friend from Sri Lanka.
    </p>



    <!-- 		Control -->
    <div class="pkgcontrol">

        <!-- Start Button buying -->
        <button class="cobutton"><span> View More</span>
               
</button>
        <!-- End Button buying -->

    </div>

</div>

<!-- 	End	Package details   -->



<!-- 	Start Package image & Information -->

<div class="package-image">

    <img src="../resources/img/Packageresult/1.jpg" alt="Omar Dsoky">

</div>
<!--  End Package image  -->


</div>
<!-- tourPackage1 -->

<div class="tourPackage">

<!-- Start	Package details -->
<div class="package-details">

    <!-- 	Package Name -->
    <h1>The Best of Down-South</h1>
    <h4 style ="float:left">Chathura Rathnayake</h4>
    <h4 style="padding-left:450px">No. of Days : 4</h4>

    <span class="hint-star star" >
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star-half-o" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>
</span>


    <!-- Package bio -->
    <p class="information">
        I'm an experienced Tour Package who has been working in the industry for almost a decade. I have completed more than 250 local tours and more than 100 international tours. With reasonable prices and high quality service you will never regret choosing me
        as your travel Package and friend from Sri Lanka.
    </p>



    <!-- 		Control -->
    <div class="pkgcontrol">

        <!-- Start Button buying -->
        <button class="cobutton"><span> View More</span>
               
</button>
        <!-- End Button buying -->

    </div>

</div>

<!-- 	End	Package details   -->



<!-- 	Start Package image & Information -->

<div class="package-image">

    <img src="../resources/img/Packageresult/2.jpg" alt="Omar Dsoky">

</div>
<!--  End Package image  -->


</div>
<!-- tourPackage2 -->
            </div>
              <!-- end of packages -->
              
        

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
        <script src="../resources/js/guide dashboard.js"></script>

        </div>
    </body>
</html>