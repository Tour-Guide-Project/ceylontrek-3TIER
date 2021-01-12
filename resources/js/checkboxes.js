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
        success: function() { 
        	window.location = "/ceylontrek-3tier/view/SmartSearchResultsPage.php" 
        } 
    });
}

const btn = document.querySelector('#btn');
btn.addEventListener('click', (event) => {
    //alert(getSelectedCheckboxValues('checkActivity'));
    getSelectedCheckboxValues('checkActivity');
});

function deleteone(activity) {

    alert("hello");
    // var activity = activity;
    // $.ajax({ 
    //     type: "POST", 
    //     url: "/ceylontrek-3TIER/controller/SS_deleteone_controller.php", 
    //     data: { activity : activity},
    //     //dataType: "json",
    //     success: function() { 
    //     	window.location = "/ceylontrek-3tier/view/SmartSearchResultsPage.php" 
    //     } 
    // });

}