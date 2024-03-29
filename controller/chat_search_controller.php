<?php session_start(); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\chat_sql.php'); ?>

<?php
    if (!isset($_SESSION['id'])) {
        header('Location:/ceylontrek-3tier/view/login.php');
    }

     $users=array();

    if($_SESSION['level']=='tourist'){
        if($_POST['search'] || $_POST['word']) {
            $search_mail =  $_POST['word'];           
            $search_mail = htmlspecialchars($search_mail);    
            $search_mail = mysqli_real_escape_string($connection,$search_mail);    
            $result_set =  tourist_search($connection,$search_mail);
        }
        else{
            header('Location:/ceylontrek-3tier/view/inbox_search.php');
        }

    }


    elseif($_SESSION['level']=='tourguide'){
        if($_POST['search'] || $_POST['word']) {
            $search_mail =  $_POST['word'];           
            $search_mail = htmlspecialchars($search_mail);    
            $search_mail = mysqli_real_escape_string($connection,$search_mail);    
            $result_set =  guide_search($connection,$search_mail);
        }
        else{
            header('Location:/ceylontrek-3tier/view/inbox_search.php');
        }

    }


    elseif($_SESSION['level']=='moderator' || $_SESSION['level']=='admin'){
        if($_POST['search'] || $_POST['word']) {
            $search_mail =  $_POST['word'];           
            $search_mail = htmlspecialchars($search_mail);    
            $search_mail = mysqli_real_escape_string($connection,$search_mail);    
            $result_set =  get_search_recivers($connection,$search_mail);
        }
        else{
            header('Location:/ceylontrek-3tier/view/inbox_search.php');
        }

    }



    if($_SESSION['level']=='tourist'){
        $s_btn[0]='tourguide';
        $s_btn[1]='moderator';
        $_SESSION['s_btn']=$s_btn;
    }
    if($_SESSION['level']=='tourguide'){
        $s_btn[0]='tourist';
        $s_btn[1]='moderator';
       
        $_SESSION['s_btn']=$s_btn;
    }

    if($_SESSION['level']=='moderator'){
        $s_btn[0]='tourist';
        $s_btn[1]='tourguide';
        $s_btn[2]='admin';
       
        $_SESSION['s_btn']=$s_btn;
    }

    if( $_SESSION['level']=='admin'){
        $s_btn[0]='tourist';
        $s_btn[1]='tourguide';
        $s_btn[2]='moderator';
        $s_btn[3]='admin';
       
        $_SESSION['s_btn']=$s_btn;
    }


   

    if ($result_set) {


        $rows = mysqli_num_rows($result_set);
        $columns = mysqli_num_fields($result_set);
        //print_r($rows);
        //print_r($columns);

        for ($i=0; $i < $rows; $i++) { 
            $result = mysqli_fetch_array($result_set,MYSQLI_ASSOC);
            //print_r($result);
            $users[] = $result;
        }

        //print_r($users);
        $_SESSION['rsearch'] = $users;
        header('Location:/ceylontrek-3tier/view/inbox_search.php');
        
    }else{
        $_SESSION['rsearch'] = '0';
        header('Location:/ceylontrek-3tier/view/inbox_search.php');
    }

?>