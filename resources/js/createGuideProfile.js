function vehicleFunction() {
    // Get the checkbox
    var checkBox = document.getElementById("haveVehicle");
    // Get the output text
    var text = document.getElementById("vehicle");

    // If the checkbox is checked, display the output text
    if (checkBox.checked == true) {
        text.style.display = "block";
    } else {
        text.style.display = "none";
    }
}