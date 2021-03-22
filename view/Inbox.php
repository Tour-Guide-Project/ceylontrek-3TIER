<?php session_start();
//get the sender details from db
$first_name=$_SESSION['first_name'];
$last_name=$_SESSION['last_name'];
$img=$_SESSION['image'];
$email=$_SESSION['email'];
$level=$_SESSION['level'];
$sid=$_SESSION['sid'];

// load the old message recivers
$rlist=$_SESSION['chatlist'];

?>
<!doctype html>
<html>
    <head>
        <title>Inbox</title>
        <link rel='stylesheet'  href='../resources/css/inbox.css'>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../resources/css/top_bar.css">
        <link rel="stylesheet" href="../resources/css/new_top_bar.css">
        <link rel="stylesheet" href="../resources/css/footer.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body class="inbox-body">
    <?php 
    if (!isset($_SESSION['id'])){
        include('../view/top_bar.php');
    }else{
        include('../view/new_top_bar.php');
    }
    ?> 
        <div class="chatbox">
           <section class="users">

                <header>
                    <!--sender deatils-->
                    <div class="scontent">
                        <img src=<?php echo ''.$img.''; ?> alt="" class="src">
                        <div class="sdetails">
                            <span><?php echo ''.$first_name.''." ".''.$last_name.''; ?></span>
                            
                        </div><!--sdetails-->
                    </div><!--scontent-->
                </header>
                

                <!--search bar for search new contact-->
                <div class="search"> 
                <form action="../controller/chat_search_controller.php" method="POST">
                    <input type="text" placeholder="Enter email address to search Users" name="word">
                    <button name="search"><i class="fa fa-search " aria-hidden="true"></i></button>  
                </form>               
                </div><!--search-->



                 <!-- msg recivers list--->
                <div class="user-list">
                    <?php
                       if($rlist){
                        foreach($rlist as $relement){
                    ?>
                    <a href="../controller/chatwindow_controller.php?r_mail=<?php echo $relement['email'] ?>" >
                         <div class="scontent">
                            <img src="<?php echo $relement['image_path']; ?>"alt="">
                            <div class="sdetails">
                            <span><?php echo $relement['first_name']." ".$relement['last_name'] ?></span>
                            <!--<p>this is a message</p>-->
                            </div><!--sdetails-->   
                        </div><!--scontent-->
                    </a>  

                    <?php
                        }
                       }
                    ?>   
                                         
                </div><!--user-list-->
           </section><!--users-->
        </div><!--chatbox-->
        <?php include('../view/footer.php');?> 
    </body>
    
</html>




