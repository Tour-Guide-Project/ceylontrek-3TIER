<?php session_start(); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\view_guide_ad_sql.php'); ?>

<?php

    //kavi part
    if(isset($_GET['view_my_profile'])){
        $guide_id=$_SESSION['id'];
        $result_set1= get_details($connection,$guide_id);
        $result_set2= get_profile_img($connection,$guide_id);
        $result_set3= get_package_details($connection,$guide_id);

        if($result_set1 && $result_set2 && $result_set3){
        
            $record=array();
            $precord=array();
            while($row1=mysqli_fetch_assoc($result_set1)){
                $record[]=$row1;      
            }

            while($row2=mysqli_fetch_assoc($result_set3)){
                $precord[]=$row2;      
            }
            $records=serialize($record);
            $precords=serialize($precord);       
            
            $img=mysqli_fetch_assoc($result_set2);
            $image_path=$img['image_path'];   
              
        header('Location:/ceylontrek-3tier/view/tourGuideMyProfile.php?image_path='.$image_path.'&'.http_build_query(array('data'=>$records,'pdata'=>$precords))); 
        }


    }
    //kavi part
    // if(isset($_GET['package_id'])){
    //     $package_id=$_GET['package_id'];

    //     //getting the packages information
    //     $result = guide_package($connection, $package_id);

    //     if ($result) {

    //         if (mysqli_num_rows($result) == 1) {

    //             $package = mysqli_fetch_assoc($result);
    //             header('Location:/ceylontrek-3tier/view/.php?' . http_build_query(array('package' => $package)));
    //         }
    //     }
    // }

   


?>