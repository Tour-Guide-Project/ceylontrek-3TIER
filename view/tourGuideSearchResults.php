<?php session_start();
$guides=$_SESSION['guides'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour Guide Search Results</title>
    <!-- <link rel="stylesheet" href="../resources/css/homepage.css"> -->
    <link rel="stylesheet" href="../resources/css/tourGuideSearchResults.css">
    <link rel="stylesheet" href="../resources/css/top_bar.css">
    <link rel="stylesheet" href="../resources/css/new_top_bar.css">
    <link rel="stylesheet" href="../resources/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body style="background-color:#DDE2DD">

    <div class="container">

   
    <?php 
    if (!isset($_SESSION['id'])){
        include('../view/top_bar.php');
    }else{
        include('../view/new_top_bar.php');
    }
    ?> 


        <div class="sidenav">
        
            <h3 style="margin-left: 20px; font-weight:30px; font-size:22px">Filter By</h2>
            <label class="checkbox">Guides with Vehicles
                    <input type="checkbox" checked="checked">
                    <span class="checkmark"></span>
                  </label>
            <label class="checkbox">Round-Trip Guides
                    <input type="checkbox">
                    <span class="checkmark"></span>
                  </label>
            <label class="checkbox">Per-Day Guides
                    <input type="checkbox">
                    <span class="checkmark"></span>
                  </label>
            <label class="checkbox">Completed more than 100 tours
                    <input type="checkbox">
                    <span class="checkmark"></span>
                  </label>
            <label class="checkbox">4 Stars Rated
                    <input type="checkbox">
                    <span class="checkmark"></span>
                  </label>
            <label class="checkbox">3 Stars Rated
                    <input type="checkbox">
                    <span class="checkmark"></span>
                  </label>
            <label class="checkbox">2 Stars Rated
                    <input type="checkbox">
                    <span class="checkmark"></span>
                  </label>
            <label class="checkbox">1 Star Rated
                    <input type="checkbox">
                    <span class="checkmark"></span>
                  </label>
            <label class="checkbox">Not Rated
                    <input type="checkbox">
                    <span class="checkmark"></span>
                  </label>
        </div>
        <!-- sidenav -->


        <div class="sortby">
            <h2 style="display: inline; ">Sort By</h2>
            <button style="margin-left: 40px;">Most Trips Completed</button>
            <button>Most Reviews</button>
            <button>Most Stars</button>
            <button>Least Per-Day Price</button>
            <button>Most Recent</button>


        </div>
        <!-- sortby -->
        

        <?php
            foreach($guides as $guide){
            ?>

        <div class="tourGuide">

            <!-- Start	Guide details -->
            <div class="guide-details">

                <!-- 	guide Name -->
                <h1><?php echo $guide['displayName']?></h1>

                <span class="hint-star star">
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star-half-o" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
          </span>


                <!-- Guide bio -->
                <p class="information">
                    <?php echo $guide['bio'] ?>
                </p>



                <!-- 		Control -->
                <div class="control">

                    <!-- Start Button buying -->
                    <form action="../controller/view_guide_ad_controller.php" method="get">   
                    <button class="btn" type="submit" name="view_guide" value="<?php echo $guide['guide_id']; ?>" ><span>View More</span>
         </button>
         </form>
                    <!-- End Button buying -->

                </div>

            </div>

            <!-- 	End	guide details   -->



            <!-- 	Start guide image & Information -->

            <div class="guide-image">

                <?php 	echo '<img src="'.$guide['img1'].'" alt="" >'; ?>

            </div>
            <!--  End guide image  -->


        </div>
        <!-- tourGuide1 -->
<?php } ?>
        

        <div class="dashend"> <?php include('../view/footer.php'); ?> </div>

    </div>
    <!-- container -->

</body>

</html>>