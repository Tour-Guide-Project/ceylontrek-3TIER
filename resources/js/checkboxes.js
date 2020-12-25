function getSelectedCheckboxValues(name) {
    var checkboxes = document.querySelectorAll(`input[name="${name}"]:checked`);
    var values = [];
    checkboxes.forEach((checkbox) => {
        values.push(checkbox.value);
    });
    //return values;
    $.ajax({ 
        type: "POST", 
        url: "/ceylontrek-3TIER/controller/SSresult_controller.php", 
        data: { values : values},
        //dataType: "json",
        // success: function() { 
        // 	alert("Success"); 
        // } 
    });
}

const btn = document.querySelector('#btn');
btn.addEventListener('click', (event) => {
    //alert(getSelectedCheckboxValues('checkActivity'));
    getSelectedCheckboxValues('checkActivity');
});