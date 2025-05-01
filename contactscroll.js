document.addEventListener("DOMContentLoaded", function() {

var contactbtn = document.getElementById("contactBTN");
var contactDown = document.getElementById("contactScroll");

contactbtn.addEventListener("click", function(event) {
    event.preventDefault();
    contactDown.scrollIntoView({ behavior: 'smooth' });
});
});