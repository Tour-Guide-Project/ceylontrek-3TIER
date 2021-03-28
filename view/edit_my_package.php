<?php session_start(); ?>

<html lang="en">

<head>
    <title>Edit Guide Profile</title>
    <link rel='stylesheet' type='text/css' media='screen' href='../resources/css/Guidedashboardpage.css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../resources/css/top_bar.css">
    <link rel="stylesheet" href="../resources/css/new_top_bar.css">
    <link rel="stylesheet" href="../resources/css/footer.css">
    <link rel="stylesheet" type="text/css" href="../resources/css/CreateTourPackagePage.css">
    <script type="text/javascript" src="../resources/js/jquery.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="body">
    <div class="section1">
        <?php
        if (!isset($_SESSION['id'])) {
            include('../view/top_bar.php');
        } else {
            include('../view/new_top_bar.php');
        }
        ?>
        <div class="side_bar">
            <img src="../resources/img/home/logo2.png" class="dashlogo">
            <img src="../resources/img/reviewimg.jpg" class="profile">
            <button class="edit"> Edit Profile</button><br>
            <div class="sidebar-menu">
                <ul>
                    <li>
                        <a href="guideDashboard.php">
                            <span class="menu-icon"><i class="fa fa-eye fa-1x" aria-hidden="true"></i></span>
                            <span class="menu-title">My Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a href="Inbox.php">
                            <span class="menu-icon"><i class="fa fa-comment-o" aria-hidden="true"></i></span>
                            <span class="menu-title">Inbox</span>
                        </a>
                    </li>

                    <li>
                        <a href=createGuideProfile.php>
                            <span class="menu-icon"><i class="fa fa-plus-square fa-1x" aria-hidden="true"></i></span>
                            <span class="menu-title">Create My Profile</span>
                        </a>
                    </li>

                    <li>
                        <a href="CreateTourPackagePage.php">
                            <span class="menu-icon"><i class="fa fa-plus-square fa-1x" aria-hidden="true"></i></span>
                            <span class="menu-title">Create tour package</span>
                        </a>
                    </li>

                    <li>
                        <a href="tourGuideProfile.php">
                            <span class="menu-icon"><i class="fa fa-eye fa-1x" aria-hidden="true"></i></span>
                            <span class="menu-title">View My Profile</span>
                        </a>
                    </li>

                    <li>
                        <a href="guideMyPackages.php">
                            <span class="menu-icon"><i class="fa fa-eye fa-1x" aria-hidden="true"></i></span>
                            <span class="menu-title">View My Tour Packages</span>
                        </a>
                    </li>

                    <li>
                        <a href="guideUpcomingTours.php">
                            <span class="menu-icon"><i class="fa fa-fast-forward fa-1x" aria-hidden="true"></i></span>
                            <span class="menu-title">Upcoming Tours</span>
                        </a>
                    </li>

                    <li>
                        <a href="guideUpcomingTours.php">
                            <span class="menu-icon"><i class="fa fa-fast-backward fa-1x" aria-hidden="true"></i></span>
                            <span class="menu-title">Previous Tours</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!--sidebar-manu-->
        </div>
        <!--side_bar-->

        <div class="content">

            <div class="con">
                <form action="../controller/update_my_package_controller.php" method="get" enctype="multipart/form-data">
                    <!-- <div> -->
                    <?php
                    if (isset($_GET['param'])) {
                        $errors = $_GET['param'];
                        foreach ($errors as $error) {
                            echo '<p class="error">' . $error . '</p>';
                        }
                    }
                    ?>

                    <?php
                    if (isset($_GET['package'])) {
                        $package = $_GET['package'];
                        // print_r($package);
                    }
                    ?>

                    <div class="row">
                        <div class="col-25">
                            <label for="package_name" class="lbl">Title :</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="package_name" value="<?php echo $package['package_name']; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="day_no" class="lbl">Duration :</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="day_no" value="<?php echo $package['day_no']; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="destinations" class="lbl">Destinations :</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="destinations" value="<?php echo $package['destinations']; ?>">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label for="members" class="lbl">Maximum No. Of Members :</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="members" value="<?php echo $package['members']; ?>">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label for="display_price" class="lbl">Price($) :</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="display_price" value="<?php echo $package['display_price']; ?>">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label for="pdescription" class="lbl">Description :</br>(max 2500 characters)</label>
                        </div>
                        <div class="col-75">
                            <textarea name="pdescription" style="height:200px"><?php echo $package['pdescription']; ?></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <img src="<?php echo $package['imgpath1'] ?>" alt="" class="nic">
                        <div class="col-25">
                            <label for="imageUpload1" class="lbl">Upload Main image:</label>
                        </div>
                        <div class="col-75">
                            <input type="file" id="file1" name="file[]">
                        </div>
                        <div class="col-75">
                            <button type="submit button" class=" upload_img" id="upload1" name="upload_img1" value="<?php echo $package['package_id']; ?>">Upload</button>
                            <?php if ($package['imgpath1'] == '../resources/img/SmartSearchResult/default.jpg') { ?>
                                <button type="submit button" class=" remove_img disable" id="remove1" name="remove_img1" disabled>Remove</button>
                            <?php } else { ?>
                                <button type="submit button" class=" remove_img" id="remove1" name="remove_img1" value="<?php echo $package['package_id']; ?>">Remove</button>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="row">
                        <img src="<?php echo $package['imgpath2'] ?>" alt="" class="nic">
                        <div class="col-25">
                            <label for="imageUpload2" class="lbl">Upload image 2:</label>
                        </div>
                        <div class="col-75">
                            <input type="file" id="file2" name="file[]">
                        </div>
                        <div class="col-75">
                            <button type="submit button" class=" upload_img" id="upload2" name="upload_img2" value="<?php echo $package['package_id']; ?>">Upload</button>
                            <?php if ($package['imgpath2'] == '../resources/img/SmartSearchResult/default.jpg') { ?>
                                <button type="submit button" class=" remove_img disable" id="remove2" name="remove_img2" disabled>Remove</button>
                            <?php } else { ?>
                                <button type="submit button" class=" remove_img" id="remove2" name="remove_img2" value="<?php echo $package['package_id']; ?>">Remove</button>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="row">
                        <img src="<?php echo $package['imgpath3'] ?>" alt="" class="nic">
                        <div class="col-25">
                            <label for="imageUpload3" class="lbl">Upload image 3 :</label>
                        </div>
                        <div class="col-75">
                            <input type="file" id="file3" name="file[]">
                        </div>
                        <div class="col-75">
                            <button type="submit button" class=" upload_img" id="upload3" name="upload_img3" value="<?php echo $package['package_id']; ?>">Upload</button>
                            <?php if ($package['imgpath3'] == '../resources/img/SmartSearchResult/default.jpg') { ?>
                                <button type="submit button" class=" remove_img disable" id="remove3" name="remove_img3" disabled>Remove</button>
                            <?php } else { ?>
                                <button type="submit button" class=" remove_img" id="remove3" name="remove_img3" value="<?php echo $package['package_id']; ?>">Remove</button>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="row">
                        <img src="<?php echo $package['imgpath4'] ?>" alt="" class="nic">
                        <div class="col-25">
                            <label for="imageUpload4" class="lbl">Upload image 4:</label>
                        </div>
                        <div class="col-75">
                            <input type="file" id="file4" name="file[]">
                        </div>
                        <div class="col-75">
                            <button type="submit button" class=" upload_img" id="upload6" name="upload_img4" value="<?php echo $package['package_id']; ?>">Upload</button>
                            <?php if ($package['imgpath4'] == '../resources/img/SmartSearchResult/default.jpg') { ?>
                                <button type="submit button" class=" remove_img disable" id="remove4" name="remove_img4" disabled>Remove</button>
                            <?php } else { ?>
                                <button type="submit button" class=" remove_img" id="remove4" name="remove_img4" value="<?php echo $package['package_id']; ?>">Remove</button>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="update_btn style=" style="float: right;">
                        <button class="p_button" style="margin-right: 5%;" type="submit" name="update_package" value="<?php echo $package['package_id']; ?>">Update Package</button>
                        <button class="p_button" type="submit" name="cancel" value="<?php echo $package['package_id']; ?>">Cancel</button>
                    </div>
                    <!-- </div> -->
                </form>
            </div>
            <!-- form -->
        </div>

        <!-- //successfully update alert  -->
        <?php
        if (isset($_GET['successfullyUpdated'])) { ?>
            <script>
                alert('You have Successfully Updated Your Profile!');
            </script>
        <?php } ?>
        <div class="dashend">
            <?php include('../view/footer.php'); ?>
        </div>
        <script src="../resources/js/guide dashboard.js"></script>
        <script src="../resources/js/createGuideProfile.js"></script>
</body>
<script type="text/javascript" src="../resources/js/upload_img.js"></script>

</html>