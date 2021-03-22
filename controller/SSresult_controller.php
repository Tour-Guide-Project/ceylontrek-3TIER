<?php session_start(); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\smart_search_sql.php'); ?>
<?PHP

$act = array();
$j = 0;

if (isset($_POST['values'])) {

    $activities = $_POST['values'];
    // var_dump($activities);

    foreach ($activities as $activity) {

        //var_dump($activity);
        $activity = mysqli_real_escape_string($connection, $activity);
        $result_set = search_smart($connection, $activity);
        //var_dump($result_set);

        if ($result_set) {

            $rows = mysqli_num_rows($result_set);

            for ($i = 0; $i < ($rows); $i++) {
                $result = mysqli_fetch_array($result_set, MYSQLI_ASSOC);
                // print_r($result);
                $places[$activity][] = $result;
            }
        }
        $j++;
    }
    // print_r($places);
    $_SESSION['places'] = $places;
    //header('Location:/ceylontrek-3tier/view/SmartSearchResultsPage.php');
}
?>
<?php mysqli_close($connection); ?>