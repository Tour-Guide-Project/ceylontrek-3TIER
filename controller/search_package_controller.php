<?php session_start(); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\search_package_sql.php'); ?>

<?php
$guides=array();
if(isset($_POST['seeAllPackages'])){
    $result_set=getAllPackages($connection);

    if($result_set){
        $rows=mysqli_num_rows($result_set);

        for($i=0;$i<$rows;$i++){
            $result = mysqli_fetch_array($result_set,MYSQLI_ASSOC);
               
                $packages[] = $result;
        }
        $_SESSION['packages']=$packages;
        header('Location:/ceylontrek-3tier/view/tourPackageResults.php');
    }
    else {
        //query unsuccessfull, redirect users page
        header('Location:/ceylontrek-3tier/view/homepage.php?err=guide_not_found');
    }
}




?>