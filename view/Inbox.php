<?php session_start();?>
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
        <div id="new-message">
             <p class="msg-header"> New message</p>
             <p class="msg-body">
                 <form style="text-align:center" method="post">
                     <input type="text" placeholder="user_name"  name="user_name" class="newmsg-input" id="user_name"><br><br>
                     <!--available list-->
                     <datalist id="user"></datalist>
                     <textarea name="message" placeholder="Write your message" class="newmsg-input"></textarea><br><br>
                     <input type="submit" value="send" id="send" name="send"/>
                     <button>Cancel</button>
                 </form>
             </p>
             <p class="msg-footer"></p>
        </div>

        
        <div id="inbox-container">
            <div id="inbox-menu">
                <img src="../resources/img/reviewimg.jpg" class="img-menu">
                <h4 class="sender">M.P.Abeysekara</h4>
           </div><!--inbox-menu-->

         <div id="left-column">
                  <div id="tool-bar" class="tools">
                    <i class="fa fa-search fa-1x" aria-hidden="true"></i>
                    <input type="text" placeholder="Search" class="search">
                    <i class="fa fa-trash-o" aria-hidden="true">
                       <span class="tooltiptext">Delete</span>
                    </i> 

                    <i class="fa fa-plus-square-o" aria-hidden="true">
                            <span class="tooltiptext">New_Contact</span>
                    </i>
                   
                        
                  </div><!--toolbar-->
            <div id="left-col-container">
                  <div class="msg_bar" >
                      <img src="../resources/img/reviewimg.jpg" class="img-msgbar">
                      <h5>Nazir</h5>
                  </div><!--message_bar-->

                  <div class="msg_bar">
                      <img src="../resources/img/reviewimg.jpg" class="img-msgbar">
                      <h5>Nazir</h5>
                  </div><!--message_bar-->


                  <div class="msg_bar" style="background-color:#b8b894">
                      <img src="../resources/img/reviewimg.jpg" class="img-msgbar">
                      <h5>Nazir</h5>
                  </div><!--message_bar-->


                  <div class="msg_bar">
                      <img src="../resources/img/reviewimg.jpg" class="img-msgbar">
                      <h5>Nazir</h5>
                  </div><!--message_bar-->


                  <div class="msg_bar">
                      <img src="../resources/img/reviewimg.jpg" class="img-msgbar">
                      <h5>Nazir</h5>
                  </div><!--message_bar-->


                  <div class="msg_bar">
                      <img src="../resources/img/reviewimg.jpg" class="img-msgbar">
                      <h5>Nazir</h5>
                  </div><!--message_bar-->

                  <div class="msg_bar">
                      <img src="../resources/img/reviewimg.jpg" class="img-msgbar">
                      <h5>Nazir</h5>
                  </div><!--message_bar-->

                  <div class="msg_bar">
                      <img src="../resources/img/reviewimg.jpg" class="img-msgbar">
                      <h5>Nazir</h5>
                  </div><!--message_bar-->

            </div><!--left-col-container-->
         </div><!--left-column-->

         <div id="right-column"> 
            <div id="right-col-container"> 
                <div id="msg-container">

                    <div class="me-msg"> 
                         <a href="#">You</a>
                        <p>When will you come here ? </p> 
                    </div><!--me-msg--> 


                    <div class="reply-msg"> 
                        <a href="#">Tourist</a>
                        <p>Maybe next weekend</p>     
                    </div><!--reply-msg-->


                    <div class="me-msg"> 
                         <a href="#">You</a>
                        <p>When will you come here ? </p> 
                    </div><!--me-msg--> 


                    <div class="reply-msg"> 
                        <a href="#">Tourist</a>
                        <p>Maybe next weekend</p>     
                    </div><!--reply-msg-->



                    <div class="me-msg"> 
                         <a href="#">You</a>
                        <p>When will you come here ? </p> 
                    </div><!--me-msg--> 


                    <div class="reply-msg"> 
                        <a href="#">Tourist</a>
                        <p>Maybe next weekend</p>     
                    </div><!--reply-msg-->


                </div><!--msg-container-->

                <div class="rightfooter">
                    <input type="text" placeholder="Type a message" class="typetext">
                    <i class="fa fa-paper-plane " aria-hidden="true"></i>
                </div><!--rightfooter-->
            </div><!--right-col-container-->

         </div><!--right-column-->
                 
        </div><!--inbox-container-->
        <?php include('../view/footer.php'); ?> 
    </body>
</html>




