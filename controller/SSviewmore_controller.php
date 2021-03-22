<?php session_start(); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\smart_search_sql.php'); ?>
<?php

if (isset($_GET['view_place'])) {
    $place = $_GET['view_place'];
    //print_r($place);
}

// getting the place information
$place_name = mysqli_real_escape_string($connection, $place);
//print_r($place_name);

$result_set = search_place($connection, $place_name);
//print_r($result_set);

if ($result_set) {

    if (mysqli_num_rows($result_set) == 1) {

        $result = mysqli_fetch_assoc($result_set);

        header('Location:/ceylontrek-3tier/view/SSR_ViewMorePage.php?' . http_build_query(array('place' => $result)));
    }
}
?>
<?php mysqli_close($connection); ?>