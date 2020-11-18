<?php session_start(); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\request_post_sql.php'); ?>

<?php 
    
    // checked user has been logged
    if(!isset($_SESSION['id'])){
        header('Location:/ceylontrek-3tier/view/login.php');
    }

    $t_id= mysqli_real_escape_string($connection,$_SESSION['id']);

    $mylist=array();
    // grtting the list of posts

    
    // if you want delete post ,get the post_id
    if(isset($_GET['post_id'])){
        
            // $user_id=mysqli_real_escape_string($connection,$_GET['id']);
            $mypost_id=mysqli_real_escape_string($connection,$_GET['post_id']);
             print_r($mypost_id);

            // delete rocord 
             $result1=delete_post($connection,$mypost_id);    

    }else{
            echo 'you can not delete the post';
    }
    






    // get all your request
    $result1=get_my_requests($connection,$t_id);



    // get result and set it for dispalay
        if($result1){
            $rows = mysqli_num_rows($result1);  // check number of rows in db table
            $columns = mysqli_num_fields($result1);   // check number of column in db table


            for($i=0; $i < $rows; $i++) { 
                $mypost = mysqli_fetch_array($result1,MYSQLI_ASSOC);

                 // result get into array 
                 $mylist[] = $mypost;
            }

            $_SESSION['mylist'] = $mylist;

            //redirect to page
            header('Location:/ceylontrek-3tier/view/my_all_requests.php');
     
        }else{
           //echo "Database query failed";

            echo "You can add your own tour request..";
        }  

  
?>
<?php mysqli_close($connection);?> 