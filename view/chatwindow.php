<?php session_start();
$remail=$_SESSION['mail'];
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
           <section class="chat-area">
                <header>                
                    <a href="../controller/chat_list_controller.php" class="back-icon"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                    
                        <img src="<?php echo $remail['image_path']; ?>" alt="" class="src">
                        <div class="sdetails">
                            <span><?php echo $remail['first_name']." ".$remail['last_name']; ?></span>  
                            <i class="fa fa-envelope-open-o fa-2x" aria-hidden="true"></i>                         
                        </div><!--sdetails-->                    
                </header>

                <div class="chat-content">

                </div><!--chat-content-->


                <form action="" method="post" class="typing-area" >
                    <input type="text" name="outgoing_mail" value="<?php echo $_SESSION['email']; ?>" hidden>
                    <input type="text" name="incoming_mail" value="<?php echo $remail['email']; ?>" hidden>
                    <input type="text"  name="message" class="input-field" placeholder="Type message here...." autocomplete="off">
                    <button><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                </form>

           </section><!--chat-area-->
        
        </div><!--chatbox-->
        
        <?php include('../view/footer.php');?> 
        <script src="../resources/js/chatwindow.js"></script>
    </body>
</html>




