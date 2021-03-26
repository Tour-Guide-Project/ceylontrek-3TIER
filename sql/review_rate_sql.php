<?php
      function write_rate_review($connection,$guide_id,$tourist_id,$reservation_id,$review,$rt){
          $query="INSERT INTO reviews_rate (guide_id,tourist_id,reservation_id,reviews,rating)
                   VALUES ('{$guide_id}','{$tourist_id}','{$reservation_id}','{$review}','{$rt}')";
           $result= mysqli_query($connection,$query);
           return $result;
      }

      function get_all_reviews($connection,$g_id){
          $query="SELECT ra.reviews,t.first_name,t.last_name FROM reviews_rate ra 
           INNER JOIN tourist t  ON ra.tourist_id=t.id WHERE ra.guide_id='{$g_id}'";
          $result2= mysqli_query($connection,$query);
          return $result2;
      }

?>