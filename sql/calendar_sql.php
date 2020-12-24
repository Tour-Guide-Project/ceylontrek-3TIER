<?php
function add_event($connection,$startdate,$enddate,$events,$details){
    
  //prepare database query
  $query ="INSERT INTO event(startdate,enddate,title,details)
  VALUES ('{$startdate}','{$enddate}','{$events}','{$details}')";

  $result_set=mysqli_query($connection,$query);
  return $result_set;
}

function get_event($connection,$startdate){
  //prepare database query
  $query="SELECT id,title,enddate,details FROM event WHERE startdate='{$startdate}'";
	
	$result=mysqli_query($connection,$query);
	return $result;
}

function get_event2($connection,$event_id){
  //prepare database query
  $query="SELECT id,startdate,title,enddate,details FROM event WHERE id='{$event_id}'";
	
	$result=mysqli_query($connection,$query);
	return $result;
}

function get_event3($connection,$id){
  //prepare database query
  $query="SELECT id,startdate,title,enddate,details FROM event WHERE id='{$id}'";
	
	$result=mysqli_query($connection,$query);
	return $result;
}

function update_event($connection,$startdate,$enddate,$events,$details,$id){
  $query="UPDATE event SET startdate='{$startdate}', enddate='{$enddate}',title='{$events}',details='{$details}'
  WHERE id={$id}
  LIMIT 1";

  $result=mysqli_query($connection,$query);
  return $result;
}

function delete_event($connection,$id){
  $query="DELETE FROM event WHERE id={$id} LIMIT 1";

  $result=mysqli_query($connection,$query);
  return $result;
}

?>