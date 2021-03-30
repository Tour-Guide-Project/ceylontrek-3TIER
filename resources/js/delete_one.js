$(document).ready(function () {
    $(".closebtn").click(function(){
        $(this).closest("label").css('display', 'none');
        var value = $(this).val();
        // console.log(value);
        $.ajax({
            type: "POST",
            url: "/ceylontrek-3TIER/controller/SS_deleteone_controller.php",
            data: { value : value },
            success: function () {
             console.log("success");
            }
          });
    })
})