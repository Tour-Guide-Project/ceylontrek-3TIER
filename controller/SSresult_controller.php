<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\smart_search_sql.php'); ?>
<?PHP

    if (isset($_POST['values'])) {

        //echo "trhja";

        $activities = $_POST['values'];

        foreach ($activities as $activity){

            //print_r($activity);
            $activity = mysqli_real_escape_string($connection,$activity);
            $result_set = search_activity($connection,$activity);

            if ($result_set) {

                if (mysqli_num_rows($result_set) == 1) {

                    // user found retrieve data
                    $result = mysqli_fetch_assoc($result_set);

                    // pass data
                    //$_SESSION['image_path']=$result['image_path'];
                    $_SESSION['short_description']=$result['short_description'];
                    $path=$result['image_path'];
                    //print_r($_SESSION);
                    //print_r($password);
                    if($path){
                        header('Location:/ceylontrek-3tier/view/SmartSearchResultsPage.php?path='.$path.'');
                    }
                    else{
                        header('Location:/ceylontrek-3tier/view/SmartSearchResultsPage.php');
                    }
                }
            }            
        }
    }
?>
