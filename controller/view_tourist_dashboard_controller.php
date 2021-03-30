<?php session_start(); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\signup_sql.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\tourist_dashboard_sql.php'); ?>

<?php
$info=array();
$tourist_id=$_SESSION['id'];
$date=date("Y-m-d");
$pending_tours=get_pending_tours($connection,$tourist_id,$date);
if(mysqli_num_rows($pending_tours)>0){
    $info['pending_tours']=mysqli_num_rows($pending_tours);
}
else{
    $info['pending_tours']=0;  
}

$cancelled_tours=get_cancelled_tours($connection,$tourist_id);
if(mysqli_num_rows($cancelled_tours)>0){
    $info['cancelled_tours']=mysqli_num_rows($pending_tours);
}
else{
    $info['cancelled_tours']=0;  
}

$date=date("Y-m-d");
$upcoming_tours=get_upcoming_tours($connection,$tourist_id,$date);
if(mysqli_num_rows($upcoming_tours)>0){
    $info['upcoming_tours']=mysqli_num_rows($upcoming_tours);
}
else{
    $info['upcoming_tours']=0;  
}

$previous_tours=get_previous_tours($connection,$tourist_id,$date);
if(mysqli_num_rows($previous_tours)>0){
    $info['previous_tours']=mysqli_num_rows($previous_tours);
}
else{
    $info['previous_tours']=0;  
}

header('Location: /ceylontrek-3tier/view/touristDashboard.php?'.http_build_query(array('param1'=>$info)));


if(isset($_GET['param2'])){
    $errors=array();
    $errors=$_GET['param2'];
    header('Location: /ceylontrek-3tier/view/touristDashboard.php?'.http_build_query(array('param'=>$errors,'param1'=>$info)));
}
?>

