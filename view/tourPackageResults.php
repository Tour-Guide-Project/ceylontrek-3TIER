<?php session_start();
$packages=$_SESSION['packages'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour Package Search Results</title>
    <!-- <link rel="stylesheet" href="../resources/css/homepage.css"> -->
    <link rel="stylesheet" href="../resources/css/tourGuideSearchResults.css">
    <link rel="stylesheet" href="../resources/css/top_bar.css">
    <link rel="stylesheet" href="../resources/css/new_top_bar.css">
    <link rel="stylesheet" href="../resources/css/footer.css">
    <link rel="stylesheet" href="../resources/css/tourPackageSearchResults.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body style="background-color:#DDE2DD">
    <div class="container">

    <div> <?php 
    if (!isset($_SESSION['id'])){
        include('../view/top_bar.php');
    }else{
        include('../view/new_top_bar.php');
    }
    ?> </div>


        <div class="sidenav">
            <h2 style="margin-left: 20px;">Filter By</h2>
            <label class="checkbox">Round-Trip Packages
                    <input type="checkbox" checked="checked">
                    <span class="checkmark"></span>
                  </label>
            <label class="checkbox">Per-Day Packages
                    <input type="checkbox">
                    <span class="checkmark"></span>
                  </label>
            <label class="checkbox">More than 100 Bookings made
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
            <h2 style="display: inline;">Sort By</h2>
            <button style="margin-left: 60px;">Most Booked</button>
            <button>Most Reviews</button>
            <button>Most Stars</button>
            <button>Least Price</button>
            <button>Most Recent</button>


        </div>
        <!-- sortby -->


        <?php
            foreach($packages as $package){
            ?>


        

<div class="tourPackage">

<!-- Start	Package details -->
<div class="package-details">

    <!-- 	Package Name -->
    <h1><?php echo $package['package_name']?></h1>
    <h4 style="margin-top=10px">Main Destinations :<?php echo $package['destinations']?></h4>
    <h4 style="margin-top:10px">Price :<?php echo $package['display_price']?></h4>
    <h4 style="margin-top:10px"Maximum Number of Tourists :<?php echo $package['members']?>></h4>
    <h4 style="margin-top=10px">No. of Days : <?php echo $package['day_no']?></h4>

    <!-- <span class="hint-star star" >
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star-half-o" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>
</span> -->


    <!-- Package bio -->
    <p class="information">
    <?php echo $package['pdescription']; ?> 
    </p>



    <!-- 		Control -->
    <div class="packagecontrol">

        <!-- Start Button buying -->
        <form action="../controller/view_package_ad_controller.php" method="get">   
                    <button class="btn" type="submit" style="margin-top: 10px;" name="view_package" value="<?php echo $package['package_id']; ?>" ><span>View More</span>
         </button>
         </form>
        <!-- End Button buying -->

    </div>

</div>

<!-- 	End	Package details   -->



<!-- 	Start Package image & Information -->

<div class="package-image">

    <img src=" <?php echo $package['imgpath1']; ?> " alt="Omar Dsoky">

</div>
<!--  End Package image  -->


</div>
<!-- tourPackage2 -->

<?php } ?>


<div class="dashend"> <?php include('../view/footer.php'); ?> </div>






    </div>
    <!-- container -->

</body>

</html>>