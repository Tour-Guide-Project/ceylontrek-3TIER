<?php session_start(); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\signup_sql.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\mod_approve_sql.php'); ?>
<?php

//$user_id = $_SESSION['id'];
$profiles = array();

$result_set = search_new_profiles($connection);

if ($result_set) {

    $rows = mysqli_num_rows($result_set);
    $columns = mysqli_num_fields($result_set);
    //print_r($rows);
    //print_r($columns);

    for ($i = 0; $i < $rows; $i++) {
        $result = mysqli_fetch_array($result_set, MYSQLI_ASSOC);
        //print_r($result);
        $profiles[] = $result;
    }

    header('Location:/ceylontrek-3tier/view/view_mod_approve.php?' . http_build_query(array('param' => $profiles)));
}

?>
<?php mysqli_close($connection); ?>