<?php session_start(); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\signup_sql.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\smart_search_sql.php'); ?>
<?php

$criterias_out = array();
$criterias_in = array();
$result_set = select_criteria($connection);

if ($result_set) {

    $rows = mysqli_num_rows($result_set);

    for ($i = 0; $i < ($rows); $i++) {
        $result = mysqli_fetch_assoc($result_set);
        //print_r($result);

        if ($result['activity_type'] == 'out') {
            $criterias_out[] = $result;
        } else {
            $criterias_in[] = $result;
        }
    }
    //print_r($criterias_out);
    //print_r($criterias_in);

    if (isset($_GET['deleteSuccess'])) {
        header('Location:/ceylontrek-3tier/view/SmartSearchCriteriaSelection.php?' . http_build_query(array('criterias_out' => $criterias_out, 'criterias_in' => $criterias_in)) . '&deleteSuccess');
    }

    header('Location:/ceylontrek-3tier/view/SmartSearchCriteriaSelection.php?' . http_build_query(array('criterias_out' => $criterias_out, 'criterias_in' => $criterias_in)));
}
?>
<?php mysqli_close($connection); ?>