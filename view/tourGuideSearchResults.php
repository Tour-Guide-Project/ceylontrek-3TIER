<?php session_start();?>
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

        <div class="tourGuide">

            <!-- Start	Guide details -->
            <div class="guide-details">

                <!-- 	guide Name -->
                <h1>Chathura Rathnayake</h1>

                <span class="hint-star star">
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star-half-o" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
          </span>


                <!-- Guide bio -->
                <p class="information">
                    I'm an experienced Tour Guide who has been working in the industry for almost a decade. I have completed more than 250 local tours and more than 100 international tours. With reasonable prices and high quality service you will never regret choosing me
                    as your travel guide and friend from Sri Lanka.
                </p>



                <!-- 		Control -->
                <div class="control">

                    <!-- Start Button buying -->
                    <button class="btn" ><span><a href="tourGuideProfile.php" style="color:white; text-decoration:none;"> View More</span>
                           
         </button>
                    <!-- End Button buying -->

                </div>

            </div>

            <!-- 	End	guide details   -->



            <!-- 	Start guide image & Information -->

            <div class="guide-image">

                <img src="../resources/img/guideresult/1.jpg" alt="Omar Dsoky">

            </div>
            <!--  End guide image  -->


        </div>
        <!-- tourGuide1 -->

        <div class="tourGuide">

            <!-- Start	Guide details -->
            <div class="guide-details">

                <!-- 	guide Name -->
                <h1>Iranga Mudalige</h1>

                <span class="hint-star star">
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star-half-o" aria-hidden="true"></i>
          <i class="fa fa-star-o" aria-hidden="true"></i>
        </span>


                <!-- Guide bio -->
                <p class="information">
                   Hello there!! It's time to visit the Sri Lanka and i will be your responsible guide in that journey. I can help you travel Sri lanka in the most safe, fun and a cost effective way
                </p>



                <!-- 		Control -->
                <div class="control">

                    <!-- Start Button buying -->
                    <button class="btn"><span> View More</span>
                         
       </button>
                    <!-- End Button buying -->

                </div>

            </div>

            <!-- 	End	guide details   -->



            <!-- 	Start guide image & Information -->

            <div class="guide-image">

                <img src="../resources/img/guideresult/2.jpg" alt="Omar Dsoky">

            </div>
            <!--  End guide image  -->


        </div>
        <!-- tourGuide2 -->
        <div class="tourGuide">

            <!-- Start	Guide details -->
            <div class="guide-details">

                <!-- 	guide Name -->
                <h1>Nipuna Shantha</h1>

                <span class="hint-star star">
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star-half-o" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
          </span>


                <!-- Guide bio -->
                <p class="information">
                    I'm a guide who has been in the industry since 1995, for almost over 25 years and with my experience and connections i can organise you the best trip you have ever been in Sri Lanka in the safest and the most joyful way.
                </p>



                <!-- 		Control -->
                <div class="control">

                    <!-- Start Button buying -->
                    <button class="btn"><span> View More</span>
                           
         </button>
                    <!-- End Button buying -->

                </div>

            </div>

            <!-- 	End	guide details   -->



            <!-- 	Start guide image & Information -->

            <div class="guide-image">

                <img src="../resources/img/guideresult/3.jpg" alt="Omar Dsoky">

            </div>
            <!--  End guide image  -->


        </div>
        <!-- tourGuide1 -->

        <div class="tourGuide">

            <!-- Start	Guide details -->
            <div class="guide-details">

                <!-- 	guide Name -->
                <h1>Madushanka Fernando</h1>

                <span class="hint-star star">
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star-half-o" aria-hidden="true"></i>
          <i class="fa fa-star-o" aria-hidden="true"></i>
        </span>


                <!-- Guide bio -->
                <p class="information">
                   Let's explore Sri Lanka in your own way. I will accompany you in your journey in Sri Lanka and customize it in all the your specific ways. I can assure that you will be having a great time in Sri Lanka with me.
                </p>



                <!-- 		Control -->
                <div class="control">

                    <!-- Start Button buying -->
                    <button class="btn"><span> View More</span>
                         
       </button>
                    <!-- End Button buying -->

                </div>

            </div>

            <!-- 	End	guide details   -->



            <!-- 	Start guide image & Information -->

            <div class="guide-image">

                <img src="../resources/img/guideresult/4.jpg" alt="Omar Dsoky">

            </div>
            <!--  End guide image  -->


        </div>
        <!-- tourGuide2 -->

        <div class="dashend"> <?php include('../view/footer.php'); ?> </div>

    </div>
    <!-- container -->

</body>

</html>>