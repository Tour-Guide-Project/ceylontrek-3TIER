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
    <link rel="stylesheet" type="text/css" href="../resources/css/my_all_request.css">
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

        <?php
        include('../view/guide_side_bar.php');
        ?>

        <div class="content">
            <div class="con">
                <form action="../controller/update_my_package_controller.php" method="post" enctype="multipart/form-data">
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
                            <input type="file" id="file1" name="img1">
                        </div>
                        <div class="col-75">
                            <button type="submit button" class=" upload_img" id="upload1" name="upload_img1">Upload</button>
                            <?php if ($package['imgpath1'] == '../resources/img/SmartSearchResult/default.jpg') { ?>
                                <button type="submit button" class=" remove_img disable" id="remove1" name="remove_img1" disabled>Remove</button>
                            <?php } else { ?>
                                <button type="submit button" class=" remove_img" id="remove1" name="remove_img1">Remove</button>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="row">
                        <img src="<?php echo $package['imgpath2'] ?>" alt="" class="nic">
                        <div class="col-25">
                            <label for="imageUpload2" class="lbl">Upload image 2:</label>
                        </div>
                        <div class="col-75">
                            <input type="file" id="file2" name="img2">
                        </div>
                        <div class="col-75">
                            <button type="submit button" class=" upload_img" id="upload2" name="upload_img2">Upload</button>
                            <?php if ($package['imgpath2'] == '../resources/img/SmartSearchResult/default.jpg') { ?>
                                <button type="submit button" class=" remove_img disable" id="remove2" name="remove_img2" disabled>Remove</button>
                            <?php } else { ?>
                                <button type="submit button" class=" remove_img" id="remove2" name="remove_img2">Remove</button>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="row">
                        <img src="<?php echo $package['imgpath3'] ?>" alt="" class="nic">
                        <div class="col-25">
                            <label for="imageUpload3" class="lbl">Upload image 3 :</label>
                        </div>
                        <div class="col-75">
                            <input type="file" id="file3" name="img3">
                        </div>
                        <div class="col-75">
                            <button type="submit" class=" upload_img" id="upload3" name="upload_img3">Upload</button>
                            <?php if ($package['imgpath3'] == '../resources/img/SmartSearchResult/default.jpg') { ?>
                                <button type="submit" class=" remove_img disable" id="remove3" name="remove_img3" disabled>Remove</button>
                            <?php } else { ?>
                                <button type="submit" class=" remove_img" id="remove3" name="remove_img3">Remove</button>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="row">
                        <img src="<?php echo $package['imgpath4'] ?>" alt="" class="nic">
                        <div class="col-25">
                            <label for="imageUpload4" class="lbl">Upload image 4:</label>
                        </div>
                        <div class="col-75">
                            <input type="file" id="file4" name="img4">
                        </div>
                        <div class="col-75">
                            <button type="submit" class=" upload_img" id="upload6" name="upload_img4">Upload</button>
                            <?php if ($package['imgpath4'] == '../resources/img/SmartSearchResult/default.jpg') { ?>
                                <button type="submit" class=" remove_img disable" id="remove4" name="remove_img4" disabled>Remove</button>
                            <?php } else { ?>
                                <button type="submit" class=" remove_img" id="remove4" name="remove_img4">Remove</button>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="update_btn style=" style="float: right;">
                        <button class="p_button" style="margin-right: 5%;" type="submit" name="update_package">Update Package</button>
                        <button class="p_button" type="submit" name="cancel">Cancel</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- //successfully update alert  -->
        <?php
        if (isset($_GET['successfullyUpdated'])) { ?>
            <script>
                alert('You have Successfully Updated Your Package Image');
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