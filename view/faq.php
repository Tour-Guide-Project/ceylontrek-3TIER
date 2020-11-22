<?php session_start();?>
<html lang="en">
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Frequently_asked_quections</title>
        <link rel='stylesheet'  href='../resources/css/faq.css'>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
         <link rel="stylesheet" href="../resources/css/top_bar.css">
         <link rel="stylesheet" href="../resources/css/new_top_bar.css">
         <link rel="stylesheet" href="../resources/css/footer.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body class="faqbody">
   
        <div class="faq_header">
        <?php 
    if (!isset($_SESSION['id'])){
        include('../view/top_bar.php');
    }else{
        include('../view/new_top_bar.php');
    }
    ?>
             <h1>Frequently Asked Questions</h1>
         <div class="classtable">
          <table>
             <tr>
                 <td>
                  <a href="#section1">
                     <div class="qtype 1">
                        <i class="fa fa-search fa-3x" aria-hidden="true"></i>
                        <h2 style="margin-left:70px;">General FAQ</h2>
                     </div>
                  </a>
                </td>

                 <td>
                  <a href="#section2">
                    <div class="qtype 2">
                     <i class="fa fa-user fa-3x" aria-hidden="true"></i>
                     <h2>User accounts FAQ</h2>
                    </div>
                  </a>
               </td>
                 <td>
                  <a href="#section3">
                    <div class="qtype 3">
                     <i class="fa fa-credit-card-alt fa-3x" aria-hidden="true"></i>
                     <h2>Tour payments FAQ</h2>
                    </div>
                  </a>
               </td>
                 <td>
                  <a href="#section4">
                    <div class="qtype 4">
                     <i class="fa fa-suitcase fa-3x" aria-hidden="true"></i>
                     <h2 style="margin-left:70px;">Tours FAQ</h2>
                    </div>
                   </a>
                  </td>
             </tr>
          </table> 
         </div>  
        </div><!--faq_header-->

          
        <div class="section " id="section1">
           <div class="section1">
            <h3>General FAQ</h3>
             <button class="accordion"> Will my tour group tour or private tour?</button>
             <div class="answer">
                      <p>All our Sri Lanka Tours are private tours which means we will have this tour arranged only for you and your family/friends.</p>
             </div><!--answer-->
           


             <button class="accordion"> Will my tour group tour or private tour?</button>
             <div class="answer">
                      <p>All our Sri Lanka Tours are private tours which means we will have this tour arranged only for you and your family/friends.</p>
             </div><!--answer-->



             <button class="accordion"> Will my tour group tour or private tour?</button>
             <div class="answer">
                      <p>All our Sri Lanka Tours are private tours which means we will have this tour arranged only for you and your family/friends.</p>
             </div><!--answer-->



             <button class="accordion"> Will my tour group tour or private tour?</button>
             <div class="answer">
                      <p>All our Sri Lanka Tours are private tours which means we will have this tour arranged only for you and your family/friends.</p>
             </div><!--answer-->

            </div><!--section1-->
        </div><!--section-->
        
        <div class="section" id="section2">
         
         <h3>User Accounts FAQ</h3>
          <button class="accordion"> Will my tour group tour or private tour?</button>
          <div class="answer">
                   <p>All our Sri Lanka Tours are private tours which means we will have this tour arranged only for you and your family/friends.</p>
          </div><!--answer-->



          <button class="accordion"> Will my tour group tour or private tour?</button>
          <div class="answer">
                   <p>All our Sri Lanka Tours are private tours which means we will have this tour arranged only for you and your family/friends.</p>
          </div><!--answer-->



          <button class="accordion"> Will my tour group tour or private tour?</button>
          <div class="answer">
                   <p>All our Sri Lanka Tours are private tours which means we will have this tour arranged only for you and your family/friends.</p>
          </div><!--answer-->



          <button class="accordion"> Will my tour group tour or private tour?</button>
          <div class="answer">
                   <p>All our Sri Lanka Tours are private tours which means we will have this tour arranged only for you and your family/friends.</p>
          </div><!--answer-->     
     </div><!--section-->
     
     <div class="section" id="section3">
      <div class="section3">
      <h3>Tour payments FAQ</h3>
       <button class="accordion"> Will my tour group tour or private tour?</button>
       <div class="answer">
                <p>All our Sri Lanka Tours are private tours which means we will have this tour arranged only for you and your family/friends.</p>
       </div><!--answer-->



       <button class="accordion"> Will my tour group tour or private tour?</button>
       <div class="answer">
                <p>All our Sri Lanka Tours are private tours which means we will have this tour arranged only for you and your family/friends.</p>
       </div><!--answer-->



       <button class="accordion"> Will my tour group tour or private tour?</button>
       <div class="answer">
                <p>All our Sri Lanka Tours are private tours which means we will have this tour arranged only for you and your family/friends.</p>
       </div><!--answer-->



       <button class="accordion"> Will my tour group tour or private tour?</button>
       <div class="answer">
                <p>All our Sri Lanka Tours are private tours which means we will have this tour arranged only for you and your family/friends.</p>
       </div><!--answer-->

      </div><!--section3-->
  </div><!--section-->
  

  <div class="section" id="section4">
   <h3>Tours FAQ</h3>
    <button class="accordion"> Will my tour group tour or private tour?</button>
    <div class="answer">
             <p>All our Sri Lanka Tours are private tours which means we will have this tour arranged only for you and your family/friends.</p>
    </div><!--answer-->



    <button class="accordion"> Will my tour group tour or private tour?</button>
    <div class="answer">
             <p>All our Sri Lanka Tours are private tours which means we will have this tour arranged only for you and your family/friends.</p>
    </div><!--answer-->



    <button class="accordion"> Will my tour group tour or private tour?</button>
    <div class="answer">
             <p>All our Sri Lanka Tours are private tours which means we will have this tour arranged only for you and your family/friends.</p>
    </div><!--answer-->



    <button class="accordion"> Will my tour group tour or private tour?</button>
    <div class="answer">
             <p>All our Sri Lanka Tours are private tours which means we will have this tour arranged only for you and your family/friends.</p>
    </div><!--answer-->
</div><!--section-->

     <script src="../resources/js/faq.js"></script>
     <?php include("../view/footer.php"); ?>
    </body>
</html>