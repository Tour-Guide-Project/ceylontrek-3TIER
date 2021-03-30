<?php session_start(); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\signup_sql.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\guide_dashboard_sql.php'); ?>

<?php
$info=array();
$guide_id=$_SESSION['id'];
$date=date("Y-m-d");
$pending_tours=get_pending_tours($connection,$guide_id,$date);
if(mysqli_num_rows($pending_tours)>0){
    $info['pending_tours']=mysqli_num_rows($pending_tours);
}
else{
    $info['pending_tours']=0;  
}

$cancelled_tours=get_cancelled_tours($connection,$guide_id);
if(mysqli_num_rows($cancelled_tours)>0){
    $info['cancelled_tours']=mysqli_num_rows($pending_tours);
}
else{
    $info['cancelled_tours']=0;  
}

header('Location: /ceylontrek-3tier/view/guideDashboard.php?'.http_build_query(array('param1'=>$info)));

if(isset($_GET['param2'])){
    $errors=array();
    $errors=$_GET['param2'];
    header('Location: /ceylontrek-3tier/view/guideDashboard.php?'.http_build_query(array('param'=>$errors,'param1'=>$info)));
}
?>

