<?php session_start();
$tours=array();
if(isset($_GET['param1'])){
    $tours=$_GET['param1'];
}?>
<html  lang="en">
    <head>
        <title>Pending Tours</title>
        <link rel='stylesheet' type='text/css' media='screen' href='../resources/css/Guidedashboardpage.css'>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../resources/css/top_bar.css">
    <link rel="stylesheet" href="../resources/css/new_top_bar.css">
    <link rel="stylesheet" type="text/css" href="../resources/css/my_all_request.css">
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
    
            <div>
                 <?php

                    include('../view/tourist_side_bar.php');
                
             ?>
            </div>
             <div class="content">
             <h1 class="page_title">Tours to be accepted by Guide.</h1>
            
             <div class="packages">
                    
             

<div class="tourPackage" style="margin-left:400px;">
<?php if(count($tours)>0):?>
            <?php
            foreach($tours as $tour){
            ?>

<!-- Start	Package details -->
<div class="package-details"  style="border:1px solid black;  margin-top:20px; margin-bottom:20px; margin-left:50px; width:900px;">

    <!-- 	Package Name -->
  
  
    <h4 style ="float:left; "><b>Guide Name: </b> <?php echo $tour['displayName']?></h4>


    
    


    <!-- Package bio -->
    <p class="information" >
    <p style="margin-left:50px; margin-top:10px; text-align:left; margin-top:30px"><b>Start Date:</b> <?php echo $tour['arrival_date']?></</p>
        <p style="margin-left:50px; margin-top:10px; text-align:left;"><b>End Date:</b> <?php echo $tour['departure_date']?></</p>
        <p style="margin-left:50px; margin-top:10px; text-align:left;"><b>Package Name:</b> <?php echo $tour['package_name']?></</p>
        <p style="margin-left:50px; margin-top:10px; text-align:left;"><b>Number of Adults:</b> <?php echo $tour['no_of_adults']?></</p>
        <p style="margin-left:50px; margin-top:10px; text-align:left;"><b>Number of Children:</b> <?php echo $tour['no_of_children']?></</p>
        <p style="margin-left:50px; margin-top:10px; text-align:left;"><b>Payment ($):</b> <?php echo $tour['price']?></</p>
        <p style="margin-left:50px; margin-top:10px; text-align:left;"><b>Special Notes:</b> <?php echo $tour['notes']?></p>



    <!-- 		Control -->
    
    <div class="controler">

        <!-- Start Button buying -->
        <form action="../controller/pending_tours_tourist_controller.php"  method="get">
       
        <button type="submit" name="cancel"class="cobtn" style="float:none margin-right:70px" value="<?php echo $tour['reservation_id']?>"><span> Cancel Tour</span></button>
            </form>

        <!-- End Button buying -->

    </div>

</div>

<!-- 	End	Package details   -->

            
          


<?php
            }

            ?>

</div>
<!-- tourPackage2 -->

</div>

              <!-- end of packages -->
            

              <?php else: ?>
              
<h2 style ="margin-left:100px; margin-top:50px;  " class="page_title">You do not have any Pending tours to view</h2>
echo "</div>";
<?php endif ?>             
        

               
</div>
     <div class="corner_buttons">
                        <div>
                            <button class="cobutton" style="width:260px"><i class="fa fa-credit-card" aria-hidden="true" ></i>Make a Complain</button>
                        </div>

                        <div>
                            
                            <button class="cobutton" style="width:260px; margin-top:20px"><i class="fa fa-phone" aria-hidden="true"></i>Contact Ceylon Treck</button>
                        </div>
                </div><!--corner_button-->    
               
                <div class="dashend"> <?php include('../view/footer.php'); ?> </div>
        <script src="../resources/js/guide dashboard.js"></script>       
        </div>
      

    </body>
</html>