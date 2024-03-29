<?php session_start(); ?>
<html lang="en">

<head>
    <title>My Packages</title>
    <link rel='stylesheet' type='text/css' media='screen' href='../resources/css/Guidedashboardpage.css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../resources/css/top_bar.css">
    <link rel="stylesheet" href="../resources/css/new_top_bar.css">
    <link rel="stylesheet" href="../resources/css/footer.css">
    <link rel="stylesheet" href="../resources/css/guideMyPackages.css">
    <link rel="stylesheet" type="text/css" href="../resources/css/my_all_request.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="body">
    <div class="dashnav"></div>
    <div class="section1">
        <?php
        if (!isset($_SESSION['id'])) {
            include('../view/top_bar.php');
        } else {
            include('../view/new_top_bar.php');
        }
        ?>

        <?php
        include('../view/guide_side_bar.php');
        ?>

        <div class="content" style="margin-top: 150px;">

            <?php
            if (isset($_GET['packages'])) {
                $packages = $_GET['packages'];
                //print_r($packages);

                foreach ($packages as $package) {
            ?>
                    <div class="tourPackage">
                        <!-- 	Start Package image & Information -->
                        <div class="package_image">
                            <?php
                            if ($package['imgpath1']) {
                                echo '<img src="' . $package['imgpath1'] . '" alt="">';
                            } else {
                                echo '<img src="../resources/img/SmartSearchResult/default.jpg" alt="">';
                            }
                            ?>
                        </div>
                        <!--  End Package image  -->

                        <!-- Start	Package details -->
                        <div class="package_details">
                            <!-- 	Package Name -->
                            <h1><?php echo $package['package_name']; ?></h1>
                            <h4 style="margin-top: 5px; padding-left: 450px;">No. of Days : <?php echo $package['day_no']; ?></h4>

                            <!-- Package bio -->
                            <p class="information" style="margin-top: 10px;"><?php echo $package['pdescription']; ?></p>

                            <!-- Control -->
                            <div class="pkgcontrol">
                                <form action="../controller/view_more_package_controller.php" method="get">
                                    <button class="cobutton" name="view_more" value="<?php echo $package['package_id']; ?>"><span>View More</span></button>
                                </form>
                            </div>
                        </div>
                        <!-- 	End	Package details   -->
                    </div>
            <?php
                }
            }
            ?>

        </div>
        <!-- end of packages -->

        <!-- //successfully deleted alert  -->
        <?php
        if (isset($_GET['successfullyDeleted'])) { ?>
            <script>
                alert('You have Successfully Deleted Your Tour Package');
            </script>
        <?php } ?>

        <div class="dashend"> <?php include('../view/footer.php'); ?> </div>

        <script src="../resources/js/guide dashboard.js"></script>
    </div>
</body>

</html>