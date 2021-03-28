<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>User Account Admin View</title>
    <link rel="stylesheet" type="text/css" href="../resources/css/mod_approve.css">
    <link rel="stylesheet" type="text/css" href="../resources/css/TourGuideAccountAdminView.css">
    <link rel="stylesheet" href="../resources/css/top_bar.css">
    <link rel="stylesheet" href="../resources/css/new_top_bar.css">
    <link rel="stylesheet" href="../resources/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body style="background-color:grey;">

    <?php
    if (!isset($_SESSION['id'])) {
        include('../view/top_bar.php');
    } else {
        include('../view/new_top_bar.php');
    }
    ?>

    <div class="con">

        <div class="formCls">
            <div class="formClsCls">
                <?php
                if (isset($_GET['details'])) {
                    $details = $_GET['details'];
                    //print_r($details);
                }
                ?>
                <div class="row">
                    <div class="col-25">
                        <label for="fName" class="lbl">Full Name -:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="fName" <?php echo 'value="' . $details['first_name'] . ' ' . $details['last_name'] . '"'; ?> readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="dName" class="lbl">Display Name -:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="dName" <?php echo 'value="' . $details['displayName'] . '"'; ?> readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="nic" class="lbl">NIC Number -:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="nic" <?php echo 'value="' . $details['nic'] . '"'; ?> readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="g_reg_no" class="lbl">Government Register No -:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="g_reg_no" <?php echo 'value="' . $details['government_reg_no'] . '"'; ?> readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="experience" class="lbl">Years of Experience -:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="experience" <?php echo 'value="' . $details['experience'] . '"'; ?> readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="bio" class="lbl">Bio -:</label>
                    </div>
                    <div class="col-75">
                        <textarea name="bio" style="resize: vertical; height: 100px;" readonly><?php echo $details['bio']; ?></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="description" class="lbl">Description -:</label>
                    </div>
                    <div class="col-75">
                        <textarea name="description" style="resize: vertical; height: 100px;" readonly><?php echo $details['gdescription']; ?></textarea>
                    </div>
                </div>
                <?php
                if ($details['haveVehicle']) {
                ?>
                    <div class="row">
                        <label for="hVehicle" class="lbl">Tour Guide has his own vehicle for tourism purposes.</label>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="license_no" class="lbl">License No -:</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="license_no" <?php echo 'value="' . $details['license_no'] . '"'; ?> readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="v_reg_no" class="lbl">Vehicle Register No -:</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="v_reg_no" <?php echo 'value="' . $details['vehicle_reg_no'] . '"'; ?> readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="type" class="lbl">Type -:</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="type" <?php echo 'value="' . $details['type'] . '"'; ?> readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="make" class="lbl">Make -:</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="make" <?php echo 'value="' . $details['make'] . '"'; ?> readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="model" class="lbl">Model -:</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="model" <?php echo 'value="' . $details['model'] . '"'; ?> readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="seats" class="lbl">No. of Seats -:</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="seats" <?php echo 'value="' . $details['no_of_seats'] . '"'; ?> readonly>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>

        <div class="btnCls">
            <form action="../controller/mod_approve_button_controller.php" method="get">

                <button class="modbtn" style="width:80%; height:65px;" name="decline" value="<?php echo $details['id']; ?>" onclick="return confirm('Are you sure you want to Decline this Tour-guide details?')"><span>Decline Profile</span></button>
                <button class="modbtn" style="width:80%; height:65px;" name="approve" value="<?php echo $details['id']; ?>" onclick="return confirm('Are you sure you want to Approve this Tour-guide details?')"><span>Approve Profile</span></button>
                <button class="modbtn" style="width:80%; height:65px;" type="button" onclick="window.location='../controller/mod_approve_button_controller.php?msg'"><span>Message Guide</span></button>

            </form>
        </div>

    </div>

    <?php include('../view/footer.php'); ?>

</body>
<!-- <script type="text/javascript" src="../resources/js/jscript.js"></script> -->

</html>