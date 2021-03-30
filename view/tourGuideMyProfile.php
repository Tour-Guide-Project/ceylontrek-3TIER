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

          
          
          
          <a href="../controller/view_review_controller.php?guide_id=<?php echo $_SESSION['current_guide_id']?>">
              <button type="review" class="loginbutton" style="width:200px; margin-right:60px" name="review" id="review" >
                    
                      
                      <spn class="manu-title">View All Reviews</span>
                 </button> </a>
         
        


            
            
            
        </div>
        <!-- sidenav -->
        <div class="guideInfo">
            
            <?php 
			    if(isset($_GET['data']) && isset($_GET['image_path'])){
					$records=unserialize($_GET['data']);
                    $image_path=$_GET['image_path']; ?>
                    <?php foreach ($records as $record) {?>
        
            <div class="guidewrapper ">
            <div class="avtar"><img src="<?php echo $image_path?>" alt="user-avtar" width="100%"/></div>
            <span class="guide-name"><?php echo $record['displayName']?></span>
            
            <div class="star-rating">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            

            </div>
            <div class="guide-content">
           <ul>
               <li>Trips Completed : 45</li>
               <li>Years of Experience : <?php echo $record['experience']?></li>
               <li>Four Star Rated Tours : 30</li>
               <li>Fluent Languages: <?php echo $record['fluent_languages']?></li>
            
           </ul>
            </div>
           
            </div>

            <?php if($_SESSION['level']=="tourguide"){?>
                <form action="../controller/edit_guide_myprofile_controller.php" method="post">
                    <button class="loginbutton" name="editmyprofile_btn" style="height:65px; margin-left:5px;width:100%"><span>Edit My Profile</span></button>
                </form>
            <?php }?>         
           
</div>

         <!-- end of guide info -->

            <div class="info">
    
                    <!-- Slideshow container -->
            <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
            <img src="<?php echo $record['img1']?>" style="width:640px; height:380px">
            
            </div>

            <div class="mySlides fade">
            
            <img src="<?php echo $record['img2']?>" style="width:640px ;height:380px">
            
            </div>

            <div class="mySlides fade">
            
            <img src="<?php echo $record['img3']?>" style="width:640px ;height:380px">
            
            </div>

            <div class="mySlides fade">
            
            <img src="<?php echo $record['img4']?>" style="width:640px ;height:380px">
            
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
                <p><?php echo $record['gdescription']?></p>
                <h2 style="margin-top: 20px;  font-weight:bold;">Tour Packages offered by <?php echo $record['displayName']?> :</h2>
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

            <?php }}?>
    <!-- end of info -->
    <div class="dashend"> <?php include('../view/footer.php'); ?> </div>

    </div>
    <!-- container -->


    <script>
  showSlides(slideIndex);
  
</script>
</body>

</html>>