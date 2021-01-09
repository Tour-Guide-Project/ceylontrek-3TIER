<?php session_start();
    $place_name = $_SESSION['place_name'];
    $image_path = $_SESSION['image_path'];
    $short_description = $_SESSION['short_description'];
    $long_description = $_SESSION['long_description'];
    $activities = $_SESSION['activities'];
    $all_activities = $_SESSION['all_activities'];
?>
<html  lang="en">
<head>
    <title>Edit Smart Search Place</title>
    <link rel='stylesheet' type='text/css' media='screen' href='../resources/css/Guidedashboardpage.css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../resources/css/top_bar.css">
    <link rel="stylesheet" href="../resources/css/footer.css">
    <link rel="stylesheet" type="text/css" href="../resources/css/SS_create.css">
    <link rel="stylesheet" type="text/css" href="../resources/css/SS_edit.css">
</head>

<body class="body">
    <div class="section1"> 
        <?php 
            if (!isset($_SESSION['id'])){
                include('../view/top_bar.php');
            }
            else{
                include('../view/new_top_bar.php');
            }
        ?> 
    
        <div class="content">
            <div class="con">
                <form  action="../controller/SS_edit_place_controller.php"  method="post">
                    <?php
                        if(isset($_GET['param'])){
                            $errors=$_GET['param'];
                            foreach ($errors as $error) {
                                echo '<p class="error">'.$error.'</p>';
                            }
                        }
                    ?>
                    <div class="row">
                        <div class="col-25">
                            <label for="place_name" class="lbl">Name Of Place :</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="place_name" <?php echo 'value="'.$place_name.'"'; ?>>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="short_description" class="lbl">Short Description about Place :</label>
                        </div>
                        <div class="col-75">
                            <textarea name="short_description" style="height: 100px"> <?php echo $short_description; ?> </textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="long_description" class="lbl">Long Description about Place :</label>
                        </div>
                        <div class="col-75">
                            <textarea name="long_description" style="height: 200px"> <?php echo $long_description; ?> </textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="image_upload" class="lbl">Uploaded Image :</label>
                        </div>
                        <div class="col-75">
                            <input type="file"   name="image_upload">
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
                                        foreach ($all_activities as $activity) {
                                    ?>
                                        <option value="<?php echo $activity['activity']; ?>"><?php echo $activity['activity']; ?></option>
                                    
                                    <?php
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
                                    foreach ($activities as $act) {
                                ?>
                                    <!-- <input <?php echo 'value="'.$act['activity'].'"'; ?> readonly> -->
                                    <label class="lbl_current" for=""><?php echo $act['activity']; ?></label>
                                <?php
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
                        <button class="btnbtn" style="margin-right: 5%;" name="cancel">Cancel</button>
                        <button class="btnbtn" name="place_edit">Edit Place</button>
                    </div>
                </form>
            </div>
            <!-- form -->
        </div>
        <div class="dashend"> <?php include('../view/footer.php'); ?> </div>

    </div>
</body>
</html>