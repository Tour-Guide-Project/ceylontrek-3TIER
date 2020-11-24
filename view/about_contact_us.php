<?php session_start();?>
<html lang="en">
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>About_us</title>
        <link rel='stylesheet' type='text/css' media='screen' href='../resources/css/about_contact_us.css'>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../resources/css/top_bar.css">
        <link rel="stylesheet" href="../resources/css/new_top_bar.css">
        <link rel="stylesheet" href="../resources/css/footer.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
 
    <body class="about_body">

    <?php 
    if (!isset($_SESSION['id'])){
        include('../view/top_bar.php');
    }else{
        include('../view/new_top_bar.php');
    }
    ?> 
        <div class="about_header">
           <h4>ABOUT US</h4>
        </div>

        <div class="middle-content">
            <div class="content">
                <h3>| WHO ARE WE?</h3>
                <p>Our Company has been specializing in advertising local tour guides , to have better visibility and a fair price on their services.</p>
            </div>
       
            <div class="content 2">
                <h3>| HOW WE STARTED</h3>
                <p>We are a startup company, founded by four students of the University of Colombo School of Computing as their Second Year group project.</p>
            </div>

            <div class="content 3">
                <h3>| OUR GOAL</h3>
                <p>Ceylon Trek is  a system where Tour Guides can advertise their profiles and tour packages, tourists can directly contact these tour guides, post a request for a custom tour to many tour guides at the same time, reserve a tour guide, a tour package organise a custom tour in Sri Lanka.</p>
        </div>

      </div><!--middle-content--> 
      
        <div class="contactus">
             <table>
                 <tr>
                    <td>
                        <div class="contact_form" >
                            <form>
                                <div style="display: flex;">
                                    <div style="float: left;">
                                        <h4>For more information visit our Frequently Asked Questions Page <a href="faq.php">here</a> </h4>
                                        <h3>To contact us with any questions you have, fill out the form below. </h3>
                                        <label for="name">Name</label><br>
                                        <input type="text" id="name" name="name"><br>
                                        <label for="email">Email</label><br>
                                        <input type="email" id="email" name="email"><br>
                                        <label for="subject">Subject</label><br>
                                        <input type="subject" id="subject" name="subject"><br>
                                        <label for="message">Message</label><br>
                                        <textarea rows = "4" cols = "90" name = "messages" style="resize: vertical;height:100px;border-radius:10px; margin-top:10px"></textarea><br>
                                        <button name="send">Send</button>
                                    </div>
                                    <div style="float: right;margin:120px 100px;">
                                        <img src="../resources/img/ct9.png" alt="">
                                    </div>
                                </div>
                            </form>
                            

                            <div style="text-align: center;">
                                <div
                                    class="g-recaptcha" 
                                    data-sitekey="YOUR SITE KEY"    
                                ></div>
                            </div>
                        </div>
                     </td>    
                 </tr>
             </table>
        </div><!--contactus-->
        <div class="aboutend"><?php include('../view/footer.php'); ?> </div>
  
    </body> 
</html>
