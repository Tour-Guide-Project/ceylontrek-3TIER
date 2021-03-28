<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Tour Package </title>
    <link rel="stylesheet" href="../resources/css/my_package.css">
    <link rel="stylesheet" href="../resources/css/top_bar.css">
    <link rel="stylesheet" href="../resources/css/footer.css">
    <link rel="stylesheet" href="../resources/css/new_top_bar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../resources/js/guideProfile.js"></script>
</head>

<body style="background-color:white">

    <?php
    if (!isset($_SESSION['id'])) {
        include('../view/top_bar.php');
    } else {
        include('../view/new_top_bar.php');
    }
    ?>

    <div class="package_container">

        <div class="sidenav">
            <h2 style="margin-left: 20px;">Reviews</h2>

            <div class="wrapper relative">
                <span class="client-name">Ricky Ponting</span>
                <span class="client-country">Australia</span>
                <div class="testimonial-content">
                    The package was great. Totally worth the price.
                </div>
                <a href="url" class="viewmore">View More....</a>
            </div>

            <div class="wrapper relative">
                <span class="client-name">Chris Gayle</span>
                <span class="client-country">West Indies</span>
                <div class="testimonial-content">
                    Highly recommend the package. Chathura had a good understanding about the tour.
                </div>
                <a href="url" class="viewmore">View More....</a>
            </div>

            <div class="wrapper relative">
                <span class="client-name">Anil Kumble</span>
                <span class="client-country">India</span>
                <div class="testimonial-content">
                    Good hotels. good food. great accomodation. totally worth it.
                </div>
                <a href="url" class="viewmore">View More....</a>
            </div>

            <div class="wrapper relative">
                <span class="client-name">Ricky Ponting</span>
                <span class="client-country">Australia</span>
                <div class="testimonial-content">
                    Great tour package. will definetly try the other packages of the guide. great communication.
                </div>
                <a href="url" class="viewmore">View More....</a>
            </div>
        </div>
        <!-- sidenav -->

        <?php
        if (isset($_GET['package'])) {
            $package = $_GET['package'];
            // print_r($package);
        }
        ?>

        <div class="info">

            <div class="topic">
                <h4><b><?php echo $package['package_name'] ?></b></h4>
            </div>

            <!-- Slideshow container -->
            <div class="slideshow-container">

                <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                    <?php
                    if ($package['imgpath1']) {
                        echo '<img src="' . $package['imgpath1'] . '" style="width:640px; height:380px">';
                    } else {
                        echo '<img src="../resources/img/SmartSearchResult/default.jpg" style="width:640px; height:380px">';
                    }
                    ?>
                </div>
                <div class="mySlides fade">
                    <?php
                    if ($package['imgpath2']) {
                        echo '<img src="' . $package['imgpath2'] . '" style="width:640px; height:380px">';
                    } else {
                        echo '<img src="../resources/img/SmartSearchResult/default.jpg" style="width:640px; height:380px">';
                    }
                    ?>
                </div>
                <div class="mySlides fade">
                    <?php
                    if ($package['imgpath3']) {
                        echo '<img src="' . $package['imgpath3'] . '" style="width:640px; height:380px">';
                    } else {
                        echo '<img src="../resources/img/SmartSearchResult/default.jpg" style="width:640px; height:380px">';
                    }
                    ?>
                </div>
                <div class="mySlides fade">
                    <?php
                    if ($package['imgpath4']) {
                        echo '<img src="' . $package['imgpath4'] . '" style="width:640px; height:380px">';
                    } else {
                        echo '<img src="../resources/img/SmartSearchResult/default.jpg" style="width:640px; height:380px">';
                    }
                    ?>
                </div>

                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>

                <!-- The dots/circles -->
                <div class="circles">
                    <div style="text-align:center">
                        <span class="dot" onclick="currentSlide(1)"></span>
                        <span class="dot" onclick="currentSlide(2)"></span>
                        <span class="dot" onclick="currentSlide(3)"></span>
                        <span class="dot" onclick="currentSlide(4)"></span>
                    </div>
                </div>

            </div>
            <!-- end of slideshow-container -->

            <div class="guide-bio">
                <p style="margin-top:10px"><b>Main Destinations : </b><?php echo $package['destinations'] ?></p>
                <p style="margin-top:10px"><b>Duration : </b><?php echo $package['day_no'], ' days' ?></p>
                <p style="margin-top:10px"><b>Maximun Number of Members : </b><?php echo $package['members'] ?></p>
                <p style="margin-top:10px"><b>Price : </b><?php echo $package['display_price'], '/=' ?></p>
                <p style="margin-top:10px"><b>Package Description : </b><?php echo $package['pdescription'] ?></p>
            </div>
        </div>
        <!-- end of info -->

        <div class="guideInfo">
            <form action="../controller/edit_my_package_controller.php" method="get">
                <button class="editbutton" name="edit_package" value="<?php echo $package['package_id']; ?>"><span>Edit Package</span></button>
            </form>
            <form action="../controller/delete_my_package_controller.php" method="get">
                <button class="editbutton" style="margin-top: 10px;" name="delete_package" value="<?php echo $package['package_id']; ?>" onclick="return confirm('Are you sure you want to Delete this Tour Package?')"><span>Delete Package</span></button>
            </form>
        </div>

    </div>
    <!-- container -->

    <script>
        showSlides(slideIndex);
    </script>

    <!-- //successfully update alert  -->
    <?php
    if (isset($_GET['updateSuccess'])) { ?>
        <script>
            alert('You have Successfully Updated Your Tour Package');
        </script>
    <?php } ?>

    <?php include('../view/footer.php'); ?>
</body>
<script type="text/javascript" src="../resources/js/jscript.js"></script>

</html>>