<?php session_start();?>
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





        <div class="tourPackage">

            <!-- Start	Package details -->
            <div class="package-details">

                <!-- 	Package Name -->
                <h1>The Down South Adventure</h1>
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
                   Lets explore the golden beaches of Sri Lanka, have an authentic sea food platter at a 4 star restaurent by the sea and have some classy shopping in the classic outlets at the Galle Fort.
                </p>



                <!-- 		Control -->
                <div class="packagecontrol">

                    <!-- Start Button buying -->
                    <button class="btn"><span> <a href="tourpackage.php" style="color:white; text-decoration:none;">View More</a></span>
                           
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
        <!-- tourPackage1 -->

        <div class="tourPackage">

            <!-- Start	Package details -->
            <div class="package-details">

                <!-- 	Package Name -->
                <h1>Colombo in a Day</h1>
                <h4 style ="float:left">Saman Dissanayake</h4>
                <h4 style="padding-left:450px">No. of Days : 1</h4>

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
                <div class="packagecontrol">

                    <!-- Start Button buying -->
                    <button class="btn"><span> View More</span>
                           
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
        <!-- tourPackage2 -->

        <div class="tourPackage">

<!-- Start	Package details -->
<div class="package-details">

    <!-- 	Package Name -->
    <h1>The Best of Anuradhapura</h1>
    <h4 style ="float:left">Deeghayu Fernando</h4>
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
        Let's explore the first and greatest capital city of Sri Lanka, Anuradhapura. A tour filled with ruins, shrines, temples, lakes and excitement.
    </p>



    <!-- 		Control -->
    <div class="packagecontrol">

        <!-- Start Button buying -->
        <button class="btn"><span> View More</span>
               
</button>
        <!-- End Button buying -->

    </div>

</div>

<!-- 	End	Package details   -->



<!-- 	Start Package image & Information -->

<div class="package-image">

    <img src="../resources/img/Packageresult/3.jpg" alt="Omar Dsoky">

</div>
<!--  End Package image  -->


</div>
<!-- tourPackage1 -->

<div class="tourPackage">

<!-- Start	Package details -->
<div class="package-details">

    <!-- 	Package Name -->
    <h1>Sigiriya Hike</h1>
    <h4 style ="float:left">Iranga Mudalige</h4>
    <h4 style="padding-left:450px">No. of Days : 1</h4>

    <span class="hint-star star" >
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star-half-o" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>
</span>


    <!-- Package bio -->
    <p class="information">
       Explore Sigiriya in one day with a hike to Sigiriya, a visit to the Sigiriya museum and lunch in an exclusive 4 star restaurent.
    </p>



    <!-- 		Control -->
    <div class="packagecontrol">

        <!-- Start Button buying -->
        <button class="btn"><span> View More</span>
               
</button>
        <!-- End Button buying -->

    </div>

</div>

<!-- 	End	Package details   -->



<!-- 	Start Package image & Information -->

<div class="package-image">

    <img src="../resources/img/Packageresult/4.jpg" alt="Omar Dsoky">

</div>
<!--  End Package image  -->


</div>
<!-- tourPackage2 -->




<div class="dashend"> <?php include('../view/footer.php'); ?> </div>






    </div>
    <!-- container -->

</body>

</html>>