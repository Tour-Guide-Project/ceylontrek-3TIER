<?php

    function request($connection,$tourist_id,$title,$activities,$places,$day_no,$no_of_days,$requested_date){
    $query ="INSERT INTO custom_tour_request_post(tourist_id,title,activities,places, day_no, no_of_days,requested_date)
    VALUES('{$tourist_id}','{$title}','{$activities}','{$places}','{$day_no}','{$no_of_days}','{$requested_date}')";

        $request_result=mysqli_query($connection,$query);
        return $request_result;
    }
    
        
    function get_all_posts($connection){
        $query ="SELECT * FROM custom_tour_request_post  ORDER BY day_no DESC";
        $posts =mysqli_query($connection, $query);
        return $posts;
    }

    function get_old_posts($connection){
        $query ="SELECT * FROM custom_tour_request_post  ORDER BY day_no ASC";
        $posts =mysqli_query($connection, $query);
        return $posts;
    }

    function get_full_post($connection,$post_id){
        $query ="SELECT * FROM custom_tour_request_post WHERE post_id='{$post_id}' LIMIT 1";
        $tour_post =mysqli_query($connection, $query);
        return $tour_post;
    }

    function get_searched_posts($connection,$search_post){
        $query="SELECT * FROM custom_tour_request_post WHERE places LIKE '$search_post%' OR requested_date LIKE '$search_post%' ORDER BY day_no DESC";
        $all_post=mysqli_query($connection,$query);

        return $all_post;
    }
    
    function get_my_requests($connection,$t_id){
        $query ="SELECT * FROM custom_tour_request_post WHERE tourist_id='{$t_id}' ORDER BY requested_date DESC";
        $myposts =mysqli_query($connection, $query);
        return $myposts;
    }

    function delete_post($connection,$mypost_id){
        $query="DELETE FROM custom_tour_request_post  WHERE post_id ='{$mypost_id}' LIMIT 1";
        $result = mysqli_query($connection, $query);
        return $result;
    }

    function get_post_details($connection,$post_id){
        $query= "SELECT * FROM custom_tour_request_post WHERE post_id='{$post_id}' ";
        $update_result = mysqli_query($connection, $query);

        return $update_result;
    }
    
    function update_request($connection,$post_id,$title,$activities,$places,$day_no,$no_of_days,$requested_date){
    $query="UPDATE custom_tour_request_post SET title='{$title}' , activities='{$activities}' , places='{$places}', day_no='{$day_no}', no_of_days='{$no_of_days}', requested_date='{$requested_date}'  WHERE post_id={$post_id}";
    $update_post=mysqli_query($connection, $query);

        return $update_post;
    }

?>