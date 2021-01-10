var z = 1000;
//var y = 10000;
$(document).ready(function() {
    function notifications() {
        str = "notify-tourist";
        $.ajax({
            url: "../controller/notifications_query.php",
            method: "POST",
            data: { str: str },
            dataType: "json",
            success: function(data) {
                console.log(data);
                if (data.count > 0) {
                    document.querySelector('.circle').setAttribute('data-count', data.count);

                    var flag = 0;
                    document.getElementById('bell').addEventListener('click', (e) => {

                        if (flag == 0) {
                            document.getElementById("dropdown").style.display = "block";
                            document.getElementById('guidecalender').style.display = "none";

                            document.getElementById('dropdown').innerHTML = "";

                            for (var j = 0; j < data.results.length; j++) {
                                document.getElementById('dropdown').innerHTML += '<div class="dropdown-content" id="' + z + '" >' +
                                    '<div class="drops" type="button" id="' + data.id[j] + '" onClick="clickNotify(' + data.id[j] + ')">' +
                                    '<i class="icon drops0 ' + data.icon[j] + '" aria-hidden="true"></i>' +
                                    '<h5 class="drops1">' + data.title[j] + '</h5>' +
                                    '<h6 class="drops2">' + data.time[j] + '</h6>' +
                                    '<a class="drops3" href="' + data.path[j] + '">~ ' + data.results[j] + '</a><hr class="solid"></div></div>';

                                if (data.seen_state[j] == 1) {
                                    document.getElementById(z).style.backgroundColor = ' rgb(170, 186, 197)';
                                }

                                z++;
                                //y++;
                            }
                            flag = 1;
                        } else if (flag == 1) {
                            document.getElementById("dropdown").style.display = "none";
                            document.getElementById('guidecalender').style.display = "block";
                            flag = 0;
                        }

                    });


                } else {
                    document.getElementById('circle').classList.remove('circle');
                    var flag = 0;
                    document.getElementById('bell').addEventListener('click', (e) => {

                        if (flag == 0) {
                            document.getElementById("dropdown").style.display = "block";
                            document.getElementById('guidecalender').style.display = "none";

                            document.getElementById('dropdown').innerHTML = "";

                            for (var j = 0; j < data.results.length; j++) {
                                document.getElementById('dropdown').innerHTML += '<div class="dropdown-content" id="' + z + '" >' +
                                    '<div class="drops" type="button" id="' + data.id[j] + '" onClick="clickNotify(' + data.id[j] + ')">' +
                                    '<i class="icon drops0 ' + data.icon[j] + '" aria-hidden="true"></i>' +
                                    '<h5 class="drops1">' + data.title[j] + '</h5>' +
                                    '<h6 class="drops2">' + data.time[j] + '</h6>' +
                                    '<a class="drops3" href="' + data.path[j] + '">~ ' + data.results[j] + '</a><hr class="solid"></div></div>';

                                if (data.seen_state[j] == 1) {
                                    document.getElementById(z).style.backgroundColor = ' rgb(170, 186, 197)';
                                }

                                z++;
                                //y++;


                            }

                            //default notifications
                            if (data.results.length == 0) {
                                document.getElementById('dropdown').innerHTML += '<div class="dropdown-content">' +
                                    '<div class="drops">' +
                                    '<h5 class="drops1">Ceylon-Trek</h5>' +
                                    '<a class="drops3" style="cursor:default;" href="#">~No Notifications</a><hr class="solid"></div></div>';
                            }

                            flag = 1;

                        } else if (flag == 1) {
                            document.getElementById("dropdown").style.display = "none";
                            document.getElementById('guidecalender').style.display = "block";
                            flag = 0;
                        }

                    });


                }

            },
            error: function(jqXHR, textStatus, error) {
                console.log(jqXHR.responseText);
                console.log(jqXHR.statusText);
            }

        })
    }
    notifications();

    setInterval(function() {
        notifications();
    }, 1000);

})

//if click window except drop down list in notifications
window.onclick = function(event) {
    if ((!event.target.matches('.bell')) && (!event.target.matches('.drops')) && (!event.target.matches('.drops0')) && (!event.target.matches('.drops1')) && (!event.target.matches('.drops2')) && (!event.target.matches('.drops3'))) {

        document.getElementById("dropdown").style.display = "none";
        document.getElementById('guidecalender').style.display = "block";
    }

}

// function closeForm(x) {
//     document.getElementById(x).style.display = "none";

// }


//if click relevant notifications
function clickNotify(x) {
    $(document).ready(function() {
        function notify() {
            notify_id = x;
            $.ajax({
                url: "../controller/notifications_query.php",
                method: "POST",
                data: { notify_id: notify_id },
                dataType: "json",
                success: function(data) {

                },
                error: function(jqXHR, textStatus, error) {
                    console.log(jqXHR.responseText);
                    console.log(jqXHR.statusText);
                }

            })
        }
        notify();

        setInterval(function() {
            notify();
        }, 1000);

    })





}