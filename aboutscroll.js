document.addEventListener("DOMContentLoaded", function() {

    var aboutbtn = document.getElementById("aboutBTN");
    var aboutDown = document.getElementById("aboutScroll");
    
    aboutbtn.addEventListener("click", function(event) {
        event.preventDefault();
        aboutDown.scrollIntoView({ behavior: 'smooth' });
    });

    });
    