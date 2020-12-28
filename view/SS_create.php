<?php session_start();?>
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
                <form  action="../controller/create_SS_place_controller.php"  method="post">
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
                                <option value="bicycle_tour">Bicycle Tour</option>
                                <option value="hiking">Hiking</option>
                                <option value="whale_watching">Whale Watching</option>
                                <option value="go_cart_racing">Go-Cart Racing</option>
                                <option value="deep_sea_fishing">Deep Sea Fishing</option>
                                <option value="golf">Golf</option>
                                <option value="kite_surfing">Kite Surfing</option>
                                <option value="surfing">Surfing</option>
                                <option value="rock_climbing">Rock Climbing</option>
                                <option value="museums">Museums</option>
                                <option value="spa">Spa</option>
                                <option value="casino">Casino</option>
                                <option value="billiards">Billiards</option>
                                <option value="tea_tasting">Tea Tasting</option>
                                <option value="temples">Temples</option>
                                <option value="mosques">Mosques</option>
                                <option value="churches">Churches</option>
                                <option value="hindu_shrines">Hindu Shrines</option>
                            </select>
                        </div>
                    </div>
                    <div class="submitCls">
                        <!-- <input type="submit" name="createPackage" value="Create Package"> -->
                        <button class="btnbtn" name="place_create">Create Place</button>
                    </div>
                </form>
            </div>
            <!-- form -->
        </div>
        <div class="dashend"> <?php include('../view/footer.php'); ?> </div>

    </div>
</body>
</html>