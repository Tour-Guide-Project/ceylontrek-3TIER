<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); 
session_start();?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\calendar_sql.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Travel Calendar-Ceylon Trek</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../resources/css/calendar.css">
    <link rel="stylesheet" href="../resources/css/top_bar.css">
    <link rel="stylesheet" href="../resources/css/new_top_bar.css">
    <link rel="stylesheet" href="../resources/css/footer.css">
    <script type="text/javascript" src="../resources/js/jquery.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body onload="renderDate()" style="background-image: url('../resources/img/ct8.jpg'); background-size:cover;background-position: center center;background-attachment: fixed; background-repeat:no-repeat;">
    <?php 
    if (!isset($_SESSION['id'])){
        include('../view/top_bar.php');
    }else{
        include('../view/new_top_bar.php');
    }
    ?> 

    <div class="wrapper" id="wrapp">
        <div class="calendar">
            <div class="month">
                <i class="fa fa-caret-left  fa-3x" class="prev"  onclick="moveDate('prev')" aria-hidden="true"></i>
                <div class="date">
                    <h1 ></h1>
                    <p ></p>
                </div>

                <i class="fa fa-caret-right fa-3x" class="next" onclick="moveDate('next')" aria-hidden="true"></i>
        
            </div>
            <div class="weekdays">
                <div>Sun</div>
                <div>Mon</div>
                <div>Tue</div>
                <div>Wed</div>
                <div>Thu</div>
                <div>Fri</div>
                <div>Sat</div>
            </div>
            <div class="days">

            </div>
        </div>
    </div>


    <!-- popup form -->
    <div class="form-popup" id="myForm">
	<form action="calendar.php" class="form-container" method="post">
        <h1>Events</h1>
            <div id="event_id">

            </div>
    
            <div>
                <button type="button" class="btn" onclick="closeForm()">Cancel</button>
            </div>
  		</form>
    </div>
    
     <!-- view more popup form -->
     <!-- <div class="form-popup" id="myForm2">
	    <form action="calendar.php" class="form-container" method="post">
            <h1>Events</h1>
            <div>
               <label for="date"><b>Start Date :</b></label>
               <input style="width:100%;"  type="date" name="startdate" value="" >
            </div>

            <div>
               <label for="date"><b>End Date :</b></label>
               <input style="width:100%;"  type="date"  name="enddate" value="" >
            </div>
               
            <div>
               <label for="details"><b>Events:</b></label>
               <input style="width:100%;" type="text"  name="events" value="" >
            </div>


            <label for="details"><b>Add More :</b></label>
            <textarea rows = "4" cols = "20" name = "details" style="resize: vertical;height:100px;"></textarea>
               
            <div>
                <button type="button" class="btn" onclick="closeForm2()">Cancel</button>
            </div>
  		</form>
	</div> -->


    <script>
        //popup form open
        function openForm() {
            document.getElementById('myForm').style.display = 'block';
            document.getElementById('wrapp').style.filter= 'blur(1px)';
        }
        //popup form cancel
        function closeForm() {
            document.getElementById('myForm').style.display = 'none';
            document.getElementById('wrapp').style.filter= 'blur(0px)';
            $("div").remove(".event_addmore");
            
        }
        //popup form open
        function openForm2(x) {
            console.log(document.getElementById(x));
            document.getElementById(x).style.display = 'block';
            //document.getElementById('wrapp').style.filter= 'blur(1px)';
        }
        //popup form cancel
        function closeForm2(x) {
            document.getElementById(x).style.display = 'none';
            //document.getElementById('wrapp').style.filter= 'blur(0px)';
          
            
        }



        //get date =>get the date
        //get day => get the index of the day
        var dt = new Date();//create Date object as date

        function renderDate() {
            dt.setDate(1);

            const firstDayIndex = dt.getDay();//create variable for index of the first day of the month friday=5(index)
            const today = new Date();

            const endDate = new Date(
                dt.getFullYear(),
                dt.getMonth() + 1,
                0
            ).getDate();//create lastday of the current month

            const prevLastDate = new Date(
                dt.getFullYear(),
                dt.getMonth(),
                0
            ).getDate();//create previous lastday variable of previos month

            const lastDayIndex = new Date(
                dt.getFullYear(),
                dt.getMonth() + 1,
                0
            ).getDay();//Index of the lastday of the current month

            const nextDays = 7 - lastDayIndex - 1;

            const months = [
                "January",
                "February",
                "March",
                "April",
                "May",
                "June",
                "July",
                "August",
                "September",
                "October",
                "November",
                "December"
            ]
            document.querySelector(".date h1").innerHTML = months[dt.getMonth()];//create month

            document.querySelector(".date p").innerHTML = dt.toDateString();// create first date of the month with year

            let days = "";

            for (let x = firstDayIndex; x > 0; x--) {
                days += "<div class='prev_date'>" + (prevLastDate - x + 1) + "</div>";
            }//create previos days of the month

            for (let i = 1; i <= endDate; i++) {
                //check the current month is equal to the month in p tag
                if (i == today.getDate() && dt.getMonth() == today.getMonth() && dt.getFullYear() == today.getFullYear()){
                    days += "<div class='today' id="+i+">" + i + "</div>";
                } 
                else{
                
                    days += "<div id="+i+">" + i + "</div>";
                   
                }
                let startdate=dt.getFullYear()+"-"+(dt.getMonth()+1)+"-"+i;

                var z=1000;
                //console.log(startdate);
                    $(document).ready(function(){
                        function events(){
                            date= startdate;
                            $.ajax({
                                url:"../controller/calandar_query.php",
                                method:"POST",
                                data:{date:date},
                                dataType:"json",
                                success:function(data){
                                    if(data.count>0){
                                        document.getElementById(i).style.backgroundColor='#4373a0';
                                        document.getElementById(i).classList.add('has-event');
                                        //console.log(data);
                                        document.getElementById(i).addEventListener('click',(e)=>{
                                            openForm();
                                            //console.log(data.startdate[0]);
                                            
                                            for(var j=0;j<data.results.length;j++){
                                                id=data.id[j];
                                                // startdate=data.startdate[j];
                                                // enddate=data.enddate[j];
                                                // details=data.details[j];
                                                //console.log(data.enddate[j]);
                                                s=data.results[j];
                                                document.getElementById('event_id').innerHTML +='<div class="event_addmore"><h3>'+s+'</h3><div class="view_more" >'+
                                                '<button type="button" class="view"  onClick="openForm2('+z+');">view more</button></div></div>'+
                                                '<div class="form-popup form-container" id='+z+'><form action="calendar.php"  method="post">'+
                                                '<h1>Events</h1>'+
                                                '<div><label for="date"><b>Start Date :</b></label><input  style="width:100%;" readonly   value="'+data.startdate[j]+'" ></div>'+
                                                '<div><label for="date"><b>End Date :</b></label><input  style="width:100%;"  readonly   value="'+data.enddate[j]+'" ></div>'+
                                                '<div><label for="details"><b>Events:</b></label><input   style="width:100%;" readonly   value="'+data.results[j]+'" ></div>'+
                                                '<label for="details"><b>Add More :</b></label><textarea   rows = "4" cols = "20" name = "details" style="resize: vertical;height:100px;" readonly>'+data.details[j]+'</textarea>'+
                                                '<div><button type="button" class="btn" onclick="closeForm2('+z+')">Cancel</button></div>'+
                                                '</form></div>';

                                                z++;

                                            }

                                            
                                        });

                                        

                                    }
                                    
                                }
                               
                            })
                        }
                        events();

                    })
                  

            }//create days of the each month
           


            for (let j = 1; j <= nextDays; j++) 
            {
              days += "<div class='next_date'>"+ j + "</div>";
            }//create next dates of the month
            

            document.getElementsByClassName("days")[0].innerHTML = days;//print days

        }

        function moveDate(para) {
            if(para == "prev") {
                dt.setMonth(dt.getMonth() - 1);//create previos monthes
            } else if(para == 'next') {
                dt.setMonth(dt.getMonth() + 1);//create next monthes
            }
            renderDate();
        }

        
       
    </script>

<?php include('../view/footer.php'); ?>
</body>
</html>