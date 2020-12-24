<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php');?>

<?php

if(isset($_POST['date'])){
    $date=$_POST['date'];

    $results=array();
    $id= array();
    $startdate=array();
    $enddate=array();
    $details=array();

    $sql = "SELECT * FROM event WHERE startdate='{$date}'";
    $result = mysqli_query($connection,$sql);

    while ($row = mysqli_fetch_array($result))
    { 
        $results[] = $row['title'];
        $id[]=$row['id'];
        $startdate[]=$row['startdate'];
        $enddate[]=$row['enddate'];
        $details[]=$row['details'];
       
    }
    $count=$result->num_rows;

    $data=array(
    'count'=>$count,
    'results'=>$results,
    'id'=>$id,
    'startdate'=>$startdate ,
    'enddate'=>$enddate,
    'details'=>$details
    );
    echo json_encode($data);
 

}

?>
