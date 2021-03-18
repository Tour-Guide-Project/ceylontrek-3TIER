<?php
if (isset($_GET['param'])) {
    $profiles = $_GET['param'];
    //print_r($profiles);
    foreach ($profiles as $profile) {
        //print_r($profile);
?>
        <div class="pcolumn">
            <div class="pcard">
                <!-- <img src="../resources/img/guide/1.jpg" alt="Jane" style="width:100%; height:300px;"> -->
                <?php
                if ($profile['image_path']) {
                    echo '<img src="' . $profile['image_path'] . '" alt="" style="width:100%; height:300px;">';
                } else {
                    echo '<img src="../resources/img/default.jpg" alt="" style="width:100%; height:300px;">';
                }
                ?>
                <div class="pcontainer">
                    <h2><?php echo $profile['first_name'], " ", $profile['last_name']; ?></h2>
                    <p>Pending Profile</p>
                    <p><?php echo $profile['email']; ?></p>
                    <form action="../controller/mod_guide_others_controller.php" method="get">
                        <button class="pbutton" type="submit" name="view_guide_other_details" value="<?php echo $profile['guide_id']; ?>">View Profile</button>
                    </form>
                    <!-- <p><button class="pbutton">View Profile</button></p> -->

                </div>
            </div>
        </div>
<?php
    }
}
?>