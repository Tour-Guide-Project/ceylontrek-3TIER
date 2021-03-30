const date = new Date();


const randerCalender = () => {

    const monthDays = document.querySelector(".days");

    date.setDate(1);
    //console.log(date.getDay);
    const lastDay = new Date(date.getFullYear(), date.getMonth() + 1, 0).getDate();
    const prevLastDay = new Date(date.getFullYear(), date.getMonth(), 0).getDate();
    console.log(prevLastDay);

    const firstDayIndex = date.getDay();

    const lastDayIndex = new Date(date.getFullYear(), date.getMonth() + 1, 0).getDay();

    const nextDays = 7 - lastDayIndex - 1;
    const months = [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "Auguest",
        "September",
        "October",
        "November",
        "December",
    ];

    document.querySelector(".date h3").innerHTML = months[date.getMonth()];

    document.querySelector(".date p").innerHTML = new Date().toDateString();

    let days = "";

    for (let x = firstDayIndex; x > 0; x--) {
        days += `<div class="prev-date">${prevLastDay-x+1}</div>`;
        monthDays.innerHTML = days;
    }

    for (let i = 1; i <= lastDay; i++) {
        if (i === new Date().getDate() && date.getMonth() === new Date().getMonth()) {
            days += `<div class="today">${i}</div>`;
            monthDays.innerHTML = days;

        } else {
            days += `<div>${i}</div>`;
            monthDays.innerHTML = days;
        }
    }

    /*for(let i=1;i<=lastDay;i++){

            days+=`<div>${i}</div>`;
            monthDays.innerHTML=days;
    }*/

    for (let j = 1; j <= nextDays; j++) {
        days += `<div class="next-date">${j}</div>`;
        monthDays.innerHTML = days;
    }


}


document.querySelector('.prev').addEventListener('click', () => {
    date.setMonth(date.getMonth() - 1);
    randerCalender();
})

document.querySelector('.next').addEventListener('click', () => {
    date.setMonth(date.getMonth() + 1);
    randerCalender();
})

randerCalender();


// function openForm() {

//     document.getElementById('reviews').style.display = 'block';
// }

// function closeForm(){
//     document.getElementById('reviews').style.display = 'none';
// }