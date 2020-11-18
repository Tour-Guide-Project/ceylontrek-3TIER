<?php session_start();?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\request_post_sql.php'); ?>

<?php 

       //check the user has been logged into the website          
       if (!isset($_SESSION['id'])) {
        header('Location:/ceylontrek-3tier/view/login.php');
     }

     
    //checking post button pressed
    if(isset($_POST['submit'])){

       if (isset($_SESSION['id'])){
         
           $errors=array();
             // get tourist id 
            $tourist_id =mysqli_real_escape_string($connection,$_SESSION['id']);
            
            //get post created date and time
            $day_no=date('Y/m/d H:i:sa');
            
            //Assign data to varibles
            $title=$_POST['title'];
            $activities=$_POST['activities'];
            $places=$_POST['places'];
            $no_of_days=$_POST['no_of_days'];
            $requested_date= $_POST['requested_date'];
            

           //add post details to database
        if(empty($errors)){ 

            // no errors found .. addding record..
            $title= mysqli_real_escape_string($connection,$_POST['title']);          
            $activities= mysqli_real_escape_string($connection,$_POST['activities']);
            $places= mysqli_real_escape_string($connection,$_POST['places']);
            $no_of_days= mysqli_real_escape_string($connection,$_POST['no_of_days']);
            $requested_date= mysqli_real_escape_string($connection,$_POST['requested_date']);

            
            $result_request= request($connection,$tourist_id,$title,$activities,$places,$day_no,$no_of_days,$requested_date);

            // After add the post redirect to tour_request_post page
            if($result_request){
                 header('Location:/ceylontrek-3tier/view/tour_request_post.php?add_post=true'); 
                //if query was failed
            }else{
                $errors[]="failed to post";
            }

        }else{
           header('Location:/ceylontrek-3tier/view/tour_request_post.php?failed to post'); 
        }

    }
  }else{
    header('Location:/ceylontrek-3tier/view/tour_request_post.php?failed to post');
  }
?>
<?php mysqli_close($connection);?>