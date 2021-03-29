<?php session_start();?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\review_rate_sql.php'); ?>
<?php  require_once('C:\xampp\htdocs\ceylontrek-3TIER\sql\view_guide_profile_sql.php');?>

<?php

    if(isset($_GET['guide_id'])){

        $g_id = mysqli_real_escape_string($connection,$_GET['guide_id']);  
        $result=get_all_reviews($connection,$g_id);
       

        $reviewlist=array();
        $_rate=array();
        $g_details=array();
              

        //get reviews details
        if($result){
            $rows = mysqli_num_rows($result);  // check number of rows in db table
            $columns = mysqli_num_fields($result);   // check number of column in db table

            for($i=0; $i < $rows; $i++){ 
                $review = mysqli_fetch_array($result,MYSQLI_ASSOC);
                 // result get into array 
                 $reviewlist[] = $review;
            }                   
            $_SESSION['reviewlist'] = $reviewlist;          
        }


        // get rating details
        for($j=1; $j<5; $j++){
            $rate=view_rate_my($connection,$g_id,$j);
            if($rate){
                $rows = mysqli_num_rows($rate);  // check number of rows in db table                
                $_rate[]=$rows;                       
            }           
        }              
         $_SESSION['rate_1']=$_rate;




         //get guide details
       
        $guide_de=get_id_guide($connection,$g_id);
        if($guide_de){
            $rows = mysqli_num_rows($guide_de);  // check number of rows in db table
            $columns = mysqli_num_fields($guide_de);   // check number of column in db table

            for($i=0; $i < $rows; $i++){ 
                $guide_d = mysqli_fetch_array($guide_de,MYSQLI_ASSOC);
                 // result get into array 
                 $g_details[] = $guide_d;
            }     
            $_SESSION['guide_de'] = $g_details;          
        }

        //redirect to page
      header('Location:/ceylontrek-3tier/view/Guide_all_reviews.php');
    }

    else{

        //redirect to page
       header('Location:/ceylontrek-3tier/view/Guide_all_reviews.php');
    }


?>