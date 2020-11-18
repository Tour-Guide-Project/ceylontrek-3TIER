<?php session_start();?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\request_post_sql.php'); ?>

<?Php 

  
         //checking post button pressed
         if(isset($_GET['post_id'])){
        
            //   $post_uniq_id=$_SESSION['post_id'];
               $post_id = mysqli_real_escape_string($connection,$_GET['post_id']);
                 
               $fullpost=array();
   
               // getting the list of posts
               $result_post=get_full_post($connection,$post_id);

            // get result and set it for dispalay
                if($result_post){
                  $rows = mysqli_num_rows($result_post);  // check number of rows in db table
                  $columns = mysqli_num_fields($result_post);   // check number of column in db table


                  for ($i=0; $i < $rows; $i++) { 
                    $fullview = mysqli_fetch_array($result_post,MYSQLI_ASSOC);

                    // result get into array 
                    $fullpost[] = $fullview;
                   }

                  $_SESSION['fullpost'] =$fullpost;

                   //redirect to page
                   header('Location:/ceylontrek-3tier/view/full_tour_request_post_view.php');



             /* if($result_post){
                   while($detail = mysqli_fetch_assoc($result_post)){
                       $deatils_of_posts .= "<ul>";
                       $deatils_of_posts .= "<h3>{$detail['title']}</h3>";
                       $deatils_of_posts .= "<li><h4><i class='fa fa-calendar' aria-hidden='true'></i></h4>Requested Date : {$detail['requested_date']}</li>";
                       $deatils_of_posts .= "<li><h4><i class='fa fa-clone' aria-hidden='true'></i></h4>NO Of Dates : {$detail['no_of_days']}</li>";
                       $deatils_of_posts .= "<li><h4><i class='fa fa-map-marker' aria-hidden='true'></i></h4>Places : {$detail['places']}</li>";
                       $deatils_of_posts .= "<li><h4><i class='fa fa-futbol-o' aria-hidden='true'></i></h4>Activities & Other details : {$detail['activities']}</li>";
                       $deatils_of_posts .= "</ul>";
                    }
                
                    echo $deatils_of_posts;
                    */
              }else{
                   echo "Database query failed";
               }  
       }
   
?>