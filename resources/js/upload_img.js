// const upload_btn = document.getElementById('uploadimage');
// const choose_file = document.forms['myform']['file'];

// console.log(upload_btn);
// console.log(choose_file);

// if (choose_file.files.length == 0) {
//     console.log("notset");
// } else {
//     console.log("set");
// }
function AddRequired() {
    document.getElementById('file').required = true;
}

function RemoveRequired() {
    document.getElementById('file').required = false;
}