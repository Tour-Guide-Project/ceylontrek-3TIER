<?php

    // insert reviews and rate
      function write_rate_review($connection,$guide_id,$tourist_id,$reservation_id,$review,$rate){
          $query="INSERT INTO reviews_rate (guide_id,tourist_id,reservation_id,reviews,rating)
                   VALUES ('{$guide_id}','{$tourist_id}','{$reservation_id}','{$review}','{$rate}')";
           $result= mysqli_query($connection,$query);
           return $result;
      }
    
    //get reviews details
      function get_all_reviews($connection,$g_id){
          $query="SELECT ra.reviews,ra.rating,t.first_name,t.last_name FROM reviews_rate ra 
           INNER JOIN tourist t  ON ra.tourist_id=t.id 
            WHERE ra.guide_id='{$g_id}'";
          $result1= mysqli_query($connection,$query);      
          return $result1;    
      }  


      function guide_details($connection,$g_id){
        $query="SELECT image_path as guide_image, first_name as guide_fname, last_name as guide_lname FROM tourguide WHERE guide_id='{$g_id}' LIMIT 1";
        $result2= mysqli_query($connection,$query);      
        return $result2;
      }

    //get rating details
      function view_rate_my($connection,$g_id,$j){
          $query="SELECT * FROM reviews_rate ra WHERE ra.guide_id={$g_id} AND ra.rating={$j}";
          $result3= mysqli_query($connection,$query);      
          return $result3;
      }

    
?>