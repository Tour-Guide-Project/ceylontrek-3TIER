<?php session_start();?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\review_rate_sql.php'); ?>

<?php
       if(isset($_GET['guide_id'])){

        $g_id = mysqli_real_escape_string($connection,$_GET['guide_id']);
    
        $result=get_all_reviews($connection,$g_id);

        $reviewlist=array();
        if($result){
            $rows = mysqli_num_rows($result);  // check number of rows in db table
            $columns = mysqli_num_fields($result);   // check number of column in db table


            for($i=0; $i < $rows; $i++) { 
                $review = mysqli_fetch_array($result,MYSQLI_ASSOC);

                 // result get into array 
                 $reviewlist[] = $review;
            }

            $_SESSION['reviewlist'] = $reviewlist;

            //redirect to page
            header('Location:/ceylontrek-3tier/view/Guide_all_reviews.php');
     

       }
       else{
        header('Location:/ceylontrek-3tier/view/Guide_all_reviews.php');
       }
    }
    else{
       // header('Location:/ceylontrek-3tier/view/Guide_all_reviews.php');
    }


?>