<!DOCTYPE html>
<html>

<head>
    <title>User Account Admin View</title>
    <link rel="stylesheet" type="text/css" href="../resources/css/TouristAccountAdminView.css">
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

        <?php
        if (isset($_GET['param'])) {
            $details = $_GET['param'];
            //print_r($details);
        }
        ?>

        <div class="profileCls">
            <?php
            if ($details['image_path']) {
                echo '<img src="' . $details['image_path'] . '" alt="user-avtar" width="100%" class="profilePic">';
            } else {
                echo '<img src="../resources/img/default.jpg" alt="user-avtar" width="100%" class="profilePic">';
            }
            ?>
        </div>

        <div class="formCls">
            <div class="formClsCls">
                <div class="row">
                    <div class="col-25">
                        <label for="fName" class="lbl">Full Name</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="fName" <?php echo 'value="' . $details['first_name'] . ' ' . $details['last_name'] . '"'; ?> readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="g_reg_no" class="lbl">Government Register No</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="g_reg_no" <?php echo 'value="' . $details['government_reg_no'] . '"'; ?> readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="v_reg_no" class="lbl">Vehicle Register No</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="v_reg_no" <?php echo 'value="' . $details['vehicle_reg_no'] . '"'; ?> readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="license_no" class="lbl">License No</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="license_no" <?php echo 'value="' . $details['license_no'] . '"'; ?> readonly>
                    </div>
                </div>
            </div>
        </div>

        <!-- <?php

                ?> -->

        <div class="btnCls">
            <!-- <form action="../controller/UserAccountAdmin_controller.php" method="post"> -->

            <button class="modbtn" style="width:80%; height:65px;"><span>Decline Profile</span></button>
            <button class="modbtn" style="width:80%; height:65px;"><span>Approve Profile</span></button>
            <button class="modbtn" style="width:80%; height:65px;"><span>Message Guide</span></button>

            <!-- <div class="btn">
                    <button class="sectionBtn" type="submit" name="delete_account">Delete Account</button>
                    <button class="sectionBtn" onclick="deleteUser"> Delete Account </button>
                    <p id="test"></p>
                </div>
             -->
            <!-- </form> -->
        </div>
    </div>

    <!-- JavaScript function for delete guide -->
    <script>
        function deleteUser() {
            //var txt;
            var r = confirm("Are you sure you want to Delete this Tour-guide Account?");
            if (r == true) {
                // txt = "ok";
                window.location.href = '/ceylontrek-3tier/controller/delete_user_controller.php';
            } else {
                window.location.href = '/ceylontrek-3tier/view/UserAccountAdminView.php';
            }

            // document.getElementById("test").innerHTML = txt;
        }
    </script>

    <?php include('../view/footer.php'); ?>

</body>
<!-- <script type="text/javascript" src="../resources/js/jscript.js"></script> -->

</html>