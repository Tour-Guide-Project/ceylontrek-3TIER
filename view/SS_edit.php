<?php session_start(); ?>
<html lang="en">

<head>
    <title>Edit Smart Search Place</title>
    <link rel='stylesheet' type='text/css' media='screen' href='../resources/css/Guidedashboardpage.css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../resources/css/top_bar.css">
    <link rel="stylesheet" href="../resources/css/footer.css">
    <link rel="stylesheet" type="text/css" href="../resources/css/SS_create.css">
    <link rel="stylesheet" type="text/css" href="../resources/css/SS_edit.css">
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

        <div class="content">
            <div class="con">
                <form action="../controller/SS_edit_place_controller.php" method="get" enctype="multipart/form-data">
                    <?php
                    if (isset($_GET['param'])) {
                        $errors = $_GET['param'];
                        foreach ($errors as $error) {
                            echo '<p class="error">' . $error . '</p>';
                        }
                    }

                    if (isset($_GET['details'])) {
                        $details = $_GET['details'];
                    }
                    ?>
                    <div class="row">
                        <div class="col-25">
                            <label for="place_name" class="lbl">Name Of Place :</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="place_name" <?php echo 'value="' . $details['place_name'] . '"'; ?>>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="short_description" class="lbl">Short Description about Place :</label>
                        </div>
                        <div class="col-75">
                            <textarea name="short_description" style="height: 100px"> <?php echo $details['short_description']; ?> </textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="long_description" class="lbl">Long Description about Place :</label>
                        </div>
                        <div class="col-75">
                            <textarea name="long_description" style="height: 200px"> <?php echo $details['long_description']; ?> </textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="image_upload" class="lbl">Uploaded Image :</label>
                        </div>
                        <div class="col-75">
                            <input type="file" name="file" id="file">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-50-left">
                            <div class="col-50-left">
                                <label for="activities" class="lbl">Select Activities :</label>
                            </div>
                            <div class="col-50-right-b">
                                <select style="height: 150px; width: 170px;" name="activities[]" id="activities" multiple>
                                    <?php
                                    if (isset($_GET['all_activities'])) {
                                        $all_activities = $_GET['all_activities'];
                                        //print_r($all_activities);

                                        foreach ($all_activities as $activity) {
                                    ?>
                                            <option value="<?php echo $activity['activity']; ?>"><?php echo $activity['activity']; ?></option>

                                    <?php
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-50-right">
                            <div class="col-50-left">
                                <label for="activity" class="lbl">Current Activities :</label>
                            </div>
                            <div class="col-50-right-b">
                                <?php
                                if (isset($_GET['activities'])) {
                                    $activities = $_GET['activities'];
                                    //print_r($activities);

                                    foreach ($activities as $act) {
                                ?>
                                        <label class="lbl_current" for="">
                                            <?php echo $act['activity']; ?>
                                            <button class="closebtn" name="delete_one" value="<?php echo $act['activity']; ?>" id="dbtn"><i class="fa fa-close"></i></button>
                                        </label>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-50-left">
                            <div class="col-50-left">
                                <label for="new_activity" class="lbl">Add New Activity :</label>
                            </div>
                            <div class="col-50-right-b">
                                <input type="text" style="width: 170px;" name="new_activity">
                            </div>
                        </div>
                        <div class="col-50-right">
                            <div class="col-50-left">
                                <label for="activity" class="lbl">New Activity Type :</label>
                            </div>
                            <div class="col-50-right-b">
                                <select style="height: 40px; width: 170px;" name="type" id="type">
                                    <option value="out">Outdoor Activity</option>
                                    <option value="in">Indoor Activity</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="submitCls" style="float: right;">
                        <!-- <input type="submit" name="createPackage" value="Create Package"> -->
                        <button class="btnbtn" style="margin-right: 5%;" name="cancel" value="<?php echo $details['place_name']; ?>">Cancel</button>
                        <button class="btnbtn" name="place_edit" value="<?php echo $details['place_id']; ?>">Edit Place</button>
                    </div>
                </form>
            </div>
            <!-- form -->
        </div>
        <div class="dashend"> <?php include('../view/footer.php'); ?> </div>
    </div>
</body>
<!-- <script type="text/javascript" src="../resources/js/checkboxes.js"></script> -->

</html>