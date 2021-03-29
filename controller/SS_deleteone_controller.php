<?php session_start(); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\smart_search_sql.php'); ?>
<?PHP

if (isset($_POST['value'])) {

    $activity = $_POST['value'];
    // var_dump($activity);
    $activity = mysqli_real_escape_string($connection, $activity);

    $result1 = select_activity_id($connection, $activity);

    if ($result1) {

        $activity_id = mysqli_fetch_assoc($result1);

        $place_id = $_SESSION['ss_place_id'];
        // print_r($place_id);
        $place_id = mysqli_real_escape_string($connection, $place_id);

        $result2 = delete_one_place_activity($connection, $activity_id, $place_id);
    }
}
?>
<?php mysqli_close($connection); ?>