<?php session_start();
    $info=$_GET['guide_info'];
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour Guide Profile</title>
    <!-- <link rel="stylesheet" href="../resources/css/homepage.css"> -->
    <link rel="stylesheet" href="../resources/css/tourGuideProfile.css">
    <link rel="stylesheet" href="../resources/css/top_bar.css">
    <link rel="stylesheet" href="../resources/css/footer.css">
    <link rel="stylesheet" href="../resources/css/new_top_bar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../resources/js/guideProfile.js"></script> 
</head>

<body style="background-color:whitesmoke">
    <div class="container">


    <?php 
    if (!isset($_SESSION['id'])){
        include('../view/top_bar.php');
    }else{
        include('../view/new_top_bar.php');
    }
    ?> 

    <?php
        if($info['available']=="false"){
            echo '<div class="alert">';
            echo '<span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span>';
            echo ''.$info['displayName'].' is not available for the dates you chose. Please try different dates.';
            echo '</div>';
        }
        else if($info['reservation']=="success"){
            echo '<div class="alert">';
            echo '<span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span>';
            echo 'You have successfully reserved '.$info['displayName'].'';
            echo '</div>';
        }
    ?>

        <div class="sidenav">

            
            <h2 style="margin-left: 20px; margin-bottom:-20px;" >Reviews</h2>
            
            

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

          
          
          

              <button type="review" class="loginbutton" style="width:200px; margin-right:60px" name="review" id="review" >
                    <a href="../controller/view_review_controller.php?guide_id=<?php echo $_SESSION['current_guide_id']?>">
                      
                      <spn class="manu-title">View All Reviews</span>
                  </a></button>
         

        


            
            
            
        </div>
        <!-- sidenav -->
        <div class="guideInfo">
            
        
            <div class="guidewrapper ">
            <div class="avtar"><img src="<?php echo $info['image_path']?>" alt="user-avtar" width="100%"/></div>
            <span class="guide-name"><?php echo $info['displayName']?></span>
            
            <div class="star-rating">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            

            </div>
            <div class="guide-content">
           <ul>
               <li>Trips Completed : 45</li>
               <li>Years of Experience : <?php echo $info['experience']?></li>
               <li>Four Star Rated Tours : 30</li>
               <li>Fluent Languages: <?php echo $info['fluent_languages']?></li>
            
           </ul>
            </div>
           
            </div>
            <button class="loginbutton" style="height:65px; margin-left:5px;width:100%" onclick="window.location='../controller/view_guide_ad_controller.php?msg'" ><span>Message Guide</span></button>
            <button type="button" onclick="openForm()" class="loginbutton"style="height:65px; margin-left:5px;width:100%"><span>Reserve Guide</span></button>

            
                
            
             <!-- make reservation popup window -->
           <div class="form-popup" id="myForm">
              <form action="../controller/availability_controller.php" class="form-container" method="post">
                <span><b>Arrival Date :</b></span>
                <input type="date"  required="" id="arrivaldate" name="arrivaldate" min=<?php echo date('Y-m-d');?>>
                <?php
                $datetime = new DateTime('tomorrow');
               
                ?>
                <span ><b>Departure  Date :</b></span>
                <input type="date"  required="" id="departuredate" name="departuredate" min=<?php  echo $datetime->format('Y-m-d H:i:s');?>>

                 <span ><b>No. of Tourists :</b></span>
                <input type="number" min="0"  required="" id="tourists" name="no_of_tourists">
        
               
                <button type="button" class="btn cancel" onclick="closeForm()">Cancel</button>
                 <button type="submit" class="btn" name="check_availability">Check Availability</button>
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
    
                    <!-- Slideshow container -->
            <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
            <img src="<?php echo $info['img1']?>" style="width:640px; height:380px">
            
            </div>

            <div class="mySlides fade">
            
            <img src=".<?php echo $info['img3']?>" style="width:640px ;height:380px">
            
            </div>

            <div class="mySlides fade">
            
            <img src="<?php echo $info['img3']?>" style="width:640px ;height:380px">
            
            </div>

            <div class="mySlides fade">
            
            <img src="<?php echo $info['img4']?>" style="width:640px ;height:380px">
            
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
                <p><?php echo $info['gdescription']?></p>
                <h2 style="margin-top: 20px;  font-weight:bold;">Tour Packages offered by <?php echo $info['displayName']?> :</h2>
            </div>

           <!-- start of tour packages -->
          

           <?php 
			    if(isset($_GET['pdata'])){
					$precords=unserialize($_GET['pdata']);?>
                    <?php foreach ($precords as $precord) {?>
                        <div class="card">
                            <img src="<?php echo $precord['imgpath1']?>" style="width:640px ;height:380px">
                            <h1><?php echo $precord['package_name']?></h1>
                        
                            <p><?php echo $precord['pdescription']?></p>
                            <p><button><a style="color:white; text-decoration:none;" type="button" onclick="window.location='../controller/view_more_package_controller.php?profile&view_more=<?php echo $precord['package_id']?>'">View Package >></a></button></p>
                        </div>
            <?php }}?>

                


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