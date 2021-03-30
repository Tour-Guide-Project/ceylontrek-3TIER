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
    <link rel="stylesheet" type="text/css" href="../resources/css/my_all_request.css">
    <link rel="stylesheet" href="../resources/css/footer.css">
    <link rel="stylesheet" href="../resources/css/guideUpcomingTours.css">
    <link rel="stylesheet" href="../resources/css/guideMyPackages.css">
    <link rel="stylesheet" href="../resources/css/touristPrevTours.css">
    <link rel="stylesheet" href="../resources/css/pretours1.css">
  
  
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

                include('../view/tourist_side_bar.php');    

             ?>
            
             <div class="content">
             <h1 class="page_title">Previous Tours</h1>
             <?php if(count($tours)>0):?>
             <div class="packages">
                    

<div class="tourPackage" style="margin-left:400px;">
              
           <?php
            foreach($tours as $tour){
            ?>
<!-- Start	Package details -->
<div class="package-details" style="border:1px solid black;  margin:10px">

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
</p>


    <!-- 		Control -->
    <div class="controler">

        <!-- Start Button buying -->
        <button class="cobutton" type="button" onclick="window.location='../controller/chat_controller.php'"> Contact Guide
               
</button>
<button class="cobutton"  onclick="onForm()" > Write a Review
               
</button>

        <!-- End Button buying -->

    </div>

</div>

<!-- 	End	Package details   -->
           


      <?php
            }

            ?>


<!-- tourPackage2 -->
        </div>
              <!-- end of packages -->
 
</div>
<?php else: ?>
<h2 style ="margin-left:100px; margin-top:50px;  " class="page_title">You do not have any Previous tours to view</h2>
<?php endif ?>   

        <div class="review" id="reviews"> <!--pop up form-->
            <form action="../controller/review_rate_controller.php" class="form-container" method="post">
               <h1> Write Review</h1>             
               <div class="rate">
                  
                   <input type="radio" name="rate" id="rate-4" value=4>
                   <label for="rate-4" class="fa fa-star"></label>


                   <input type="radio" name="rate" id="rate-3" value=3>
                   <label for="rate-3" class="fa fa-star"></label>

                   <input type="radio" name="rate" id="rate-2" value=2>
                   <label for="rate-2" class="fa fa-star"></label>

                   <input type="radio" name="rate" id="rate-1" value=1>
                   <label for="rate-1" class="fa fa-star"></label>

               </div>
			   
    		     <textarea rows = "4" cols = "20" name = "review" style="resize: vertical;height:100px;" placeholder="Write your review......."></textarea>

              
                 <input type="text" name="guide_id" value="<?php echo $tour['guide_id']?>" hidden>
                 <input type="text" name="reservation_id" value="<?php echo $tour['reservation_id']?>" hidden>
    		     <button type="submit" class="btn save" name="save" id="save" onclick="return confirm('Add your review?');">Save </button>
    		     <button type="button" class="btn cancel" onclick="offForm()">Cancel</button>
  		   </form>
        </div>
              


                <!-- <div class="corner_buttons">
                        <div>
                            <button class="cobutton" style="width:260px"><i class="fa fa-credit-card" aria-hidden="true" ></i>Make a Complain</button>
                        </div>

                        <div>
                            
                            <button class="cobutton" style="width:260px; margin-top:20px"><i class="fa fa-phone" aria-hidden="true"></i>Contact Ceylon Treck</button>
                        </div>
                </div>corner_button -->
</div>

<script>

function onForm() {
       
       document.getElementById('reviews').style.display = 'block';
   }
   
   function offForm(){
       document.getElementById('reviews').style.display = 'none';
       
   }

   const rate = document.querySelector(".cobutton");
   const save = document.querySelector(".save");
   const cancel=document.querySelector(".cancel");
    save.onclick = ()=>{
          rate.style.display ="none";
    }
   


   
</script>
                <div class="dashend"> <?php include('../view/footer.php'); ?> </div>
        <script src="../resources/js/guide dashboard.js"></script>

        </div>
    </body>
</html>