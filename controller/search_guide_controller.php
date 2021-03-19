<?php session_start(); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\search_guide_sql.php'); ?>

<?php
$guides=array();
if(isset($_POST['seeAllGuides'])){
    $result_set=getAllGuides($connection);

    if($result_set){
        $rows=mysqli_num_rows($result_set);

        for($i=0;$i<$rows;$i++){
            $result = mysqli_fetch_array($result_set,MYSQLI_ASSOC);
               
                $guides[] = $result;
        }
        $_SESSION['guides']=$guides;
        header('Location:/ceylontrek-3tier/view/tourGuideSearchResults.php');
    }
    else {
        //query unsuccessfull, redirect users page
        header('Location:/ceylontrek-3tier/view/login.php?err=guide_not_found');
    }
}




?>