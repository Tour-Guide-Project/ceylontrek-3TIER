function AddRequired() {
    document.getElementById('gender').required = true;
    document.getElementById('check').required = true;
}

function RemoveRequired() {
    document.getElementById('gender').required = false;
    document.getElementById('check').required = false;
}


//strength
const indicator = document.querySelector(".indicator");
const input = document.querySelector(".input_password");
const weak = document.getElementById("weak");
const medium = document.getElementById("medium");
const strong = document.getElementById("strong");
const text = document.getElementById("text");

let regExpWeak = /[a-z]/;
let regExpMedium = /\d+/;
let regExpStrong = /.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/;

function trigger() {
    if (input.value != "") {
        indicator.style.display = "block";
        indicator.style.display = "flex";

        if (input.value.length <= 3 && (input.value.match(regExpWeak) || input.value.match(regExpMedium) || input.value.match(regExpStrong))) no = 1;
        if (input.value.length >= 6 && ((input.value.match(regExpWeak) && input.value.match(regExpMedium)) || (input.value.match(regExpMedium) && input.value.match(regExpStrong)) || (input.value.match(regExpWeak) && input.value.match(regExpStrong)))) no = 2;
        if (input.value.length >= 6 && input.value.match(regExpWeak) && input.value.match(regExpMedium) && input.value.match(regExpStrong)) no = 3;

        if (no == 1) {
            text.style.display = "block";
            text.textContent = "Your password is too week";
            text.classList.add("weak");
            weak.style.backgroundColor = "rgb(255, 79, 79)";
            document.getElementById("submit").disabled = true;
            document.getElementById("submit").classList.add("sub");


        }
        if (no == 2) {
            // medium.classList.add("active");
            text.textContent = "Your password is too medium";
            text.classList.add("medium");
            medium.style.backgroundColor = "rgb(180, 127, 27)";
            document.getElementById("submit").disabled = true;
            document.getElementById("submit").classList.add("sub");
        } else {
            // medium.classList.remove("active");
            text.classList.remove("medium");
            // medium.style.backgroundColor="lightgrey";
        }
        if (no == 3) {
            // medium.classList.add("active");
            // strong.classList.add("active");
            text.textContent = "Your password is too strong";
            text.classList.add("strong");
            strong.style.backgroundColor = "#0f8b43";
            document.getElementById("submit").disabled = false;
            document.getElementById("submit").classList.remove("sub");
        } else {
            // medium.classList.remove("active");
            text.classList.remove("strong");
            strong.style.backgroundColor = "lightgrey";
        }


    } else {
        indicator.style.display = "none";
        text.style.display = "none";
    }
}
// errors 
$('#registerForm').on('submit', function() {
    var first = $('#first_name').val();
    var last = $('#last_name').val();
    var tel_no = $('#tel_no').val();
    var add = $('#address').val();
    var email = $('#email').val();
    var password = $('#myInput1').val();
    var gender = $('input[name="gender"]:checked').val();
    $.ajax({
        type: "POST",
        url: "../controller/signup_controller.php",
        data: { submit: 'submit', first_name: first, last_name: last, tel_no: tel_no, address: add, email: email, password: password, gender: gender },
        dataType: "json",
        success: function(data) {
            console.log(data);

            if (data.sucess == "sucess") {
                alert('Welcome ceylon-trek!');
                if (data.level == 'tourist') {
                    window.location = '/ceylontrek-3tier/view/touristDashboard.php';
                }
                if (data.level == 'tourguide') {
                    window.location = '/ceylontrek-3tier/controller/view_guide_dashboard_controller.php';
                }
                if (data.level == 'admin') {
                    window.location = '/ceylontrek-3tier/view/admin_dashboard.php';
                }
                if (data.level == 'moderator') {
                    window.location = '/ceylontrek-3tier/view/admin_dashboard.php';
                }
            } else if (data.sucess == 'unsucess') {
                if (data.first != "") {
                    $('#efirst').html(data.first);
                } else {
                    $('#efirst').html("");
                }
                if (data.last != "") {
                    $('#elast').html(data.last);
                } else {
                    $('#elast').html("");
                }
                if (data.add != "") {
                    $('#eaddress').html(data.add);
                } else {
                    $('#eaddress').html("");
                }
                if (data.email != "") {
                    $('#eemail').html(data.email);
                } else {
                    $('#eemail').html("");
                }
                if (data.tel != "") {
                    $('#etel_no').html(data.tel);
                } else {
                    $('#etel_no').html("");
                }
                if (data.password != "") {
                    $('#epassword').html(data.password);
                } else {
                    $('#epassword').html("");
                }
            }
        },
        error: function(request, status, error) {
            alert(request.responseText);
        }
    });

    return false;
});