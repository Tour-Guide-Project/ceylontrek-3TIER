<?php session_start(); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\smart_search_sql.php'); ?>
<?php

if (isset($_GET['view_place'])) {
    $place_id = $_GET['view_place'];
    //print_r($place_id);

    $place_id = mysqli_real_escape_string($connection, $place_id);

    // getting the place information
    $result = search_place($connection, $place_id);
    //print_r($result);

    if ($result) {

        if (mysqli_num_rows($result) == 1) {

            $place = mysqli_fetch_assoc($result);

            header('Location:/ceylontrek-3tier/view/SSR_ViewMorePage.php?' . http_build_query(array('place' => $place)));
        }
    }
}
?>
<?php mysqli_close($connection); ?>