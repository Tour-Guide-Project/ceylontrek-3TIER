const btn = document.querySelector('#delete_place');
btn.addEventListener('click', (event) => {
    var r = confirm("Are you sure you want to Delete this place?");
    if (r == true) {
        window.location.href = '/ceylontrek-3tier/controller/SS_delete_place_controller.php';
    }else{
        window.location.href = '/ceylontrek-3tier/view/SSR_ViewMorePage.php';
    }
});