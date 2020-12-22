<?php session_start();?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\request_post_sql.php'); ?>

<?php 

    $list = array();
     // check has been written on the search or  has been pressed the search button 
     if ($_POST['search'] || $_POST['word'] ){   // process to display the searched posts

        $search_post =  $_POST['word'];        
        $search_post = htmlspecialchars($search_post);
        $search_post = mysqli_real_escape_string($connection,$search_post);

        //get the search result
         $all_post=get_searched_posts($connection,$search_post);

       
    }elseif($_POST['old_submit']){  // process to display the all posts

        $all_post=get_old_posts($connection);

    }elseif($_POST['new_submit']){  // process to display the all posts

        $all_post=get_all_posts($connection);

    }else{
        $all_post=get_all_posts($connection);
    }


    
    

    // get result and set it for dispalay
    if($all_post){
        $rows = mysqli_num_rows($all_post);  // check number of rows in db table
        $columns = mysqli_num_fields($all_post);   // check number of column in db table


        for ($i=0; $i < $rows; $i++) { 
            $result = mysqli_fetch_array($all_post,MYSQLI_ASSOC);

            // result get into array 
             $list[] = $result;
        }
        
        $_SESSION['list'] = $list;

        //redirect to page
        header('Location:/ceylontrek-3tier/view/tour_request_post.php');
         
      
   }else{ 
       echo "Database query failed";
   }  

?>
<?php mysqli_close($connection);?>
