<?php session_start(); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\signup_sql.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\tourist_dashboard_sql.php'); ?>

<?php
  // if (isset($_POST['previous_tours'])){
    $previoustours=array();
    $date=date("Y-m-d");
    $touristid=$_SESSION['id'];
    $result_set=get_previous_tours($connection,$touristid,$date);
    if($result_set){
        $rows=mysqli_num_rows($result_set);

        for($i=0;$i<$rows;$i++){
            $result = mysqli_fetch_array($result_set,MYSQLI_ASSOC);
               
                $previoustours[] = $result;
        }
        $guideid=$previoustours['guide_id'];
    header('Location: /ceylontrek-3tier/view/touristPrevTours.php?'.http_build_query(array('param1'=>$previoustours)));
    $_SESSION['level']='tourguide';
    }
//}
?>