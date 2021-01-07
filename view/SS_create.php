<?php session_start();
    $all_activities = $_SESSION['all_activities'];
?>
<html  lang="en">
<head>
    <title>Create Smart Search Place</title>
    <link rel='stylesheet' type='text/css' media='screen' href='../resources/css/Guidedashboardpage.css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../resources/css/top_bar.css">
    <link rel="stylesheet" href="../resources/css/footer.css">
    <link rel="stylesheet" type="text/css" href="../resources/css/SS_create.css">
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
                <form  action="../controller/SS_create_place_controller.php"  method="post">
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
                            <input type="text" name="place_name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="short_description" class="lbl">Short Description about Place :</label>
                        </div>
                        <div class="col-75">
                            <textarea name="short_description" style="height: 100px"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="long_description" class="lbl">Long Description about Place :</label>
                        </div>
                        <div class="col-75">
                            <textarea name="long_description" style="height: 200px"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="image_upload" class="lbl">Upload Image :</label>
                        </div>
                        <div class="col-75">
                            <input type="file"   name="image_upload">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="activities" class="lbl">Choose Activities:</label>
                        </div>
                        <div class="col-75">
                            <select style="height: 150px; width: 200px;" name="activities[]" id="activities" multiple>
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
                    <div class="submitCls" style="float: right;">
                        <!-- <input type="submit" name="createPackage" value="Create Package"> -->
                        <button class="btnbtn" style="margin-right: 5%;" name="cancel">Cancel</button>
                        <button class="btnbtn" style="width: 130px;" name="place_create">Create Place</button>
                    </div>
                </form>
            </div>
            <!-- form -->
        </div>
        <div class="dashend"> <?php include('../view/footer.php'); ?> </div>

    </div>
</body>
</html>