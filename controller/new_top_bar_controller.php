<?php session_start();?>
<?php
$level=$_SESSION['level'];
 
if ($level=='tourist'){
    header('Location:/ceylontrek-3tier/view/touristDashboard.php');
}
if ($level=='tourguide'){
    header('Location:/ceylontrek-3tier/view/guideDashboard.php');
}
if ($level=='admin'){
    header('Location:/ceylontrek-3tier/view/admin_dashboard.php');
}
if ($level=='moderator'){
    header('Location:/ceylontrek-3tier/view/moderator_dashboard.php');
}

?>