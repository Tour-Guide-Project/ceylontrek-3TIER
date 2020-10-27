
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Travel Calendar-Ceylon Trek</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../resources/css/calendar.css">
    <link rel="stylesheet" href="../resources/css/top_bar.css">
    <link rel="stylesheet" href="../resources/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body onload="renderDate()" style="background-image: url('../resources/img/ct8.jpg'); background-size:cover;background-position: center center;background-attachment: fixed; background-repeat:no-repeat;">
    <?php include('../view/top_bar.php'); ?>

    <div class="wrapper">
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
    <script>
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
                    days += "<div class='today'>" + i + "</div>";
                } 
                else
                    days += "<div>" + i + "</div>";
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