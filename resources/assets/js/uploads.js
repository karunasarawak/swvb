var csvuploadbtn = document.getElementById("submit-leads-csv");
var csvuploadform = document.getElementById("leads-upload");
var csvdropzone = document.getElementById("leads-upload");

csvuploadbtn.addEventListener("click", function () {
    csvuploadform.submit(); 
});