document.addEventListener("DOMContentLoaded", function() {
    var hbtn = document.getElementById("homeBTN");
    var scrolUp = document.getElementById("homeScroll");



    hbtn.addEventListener("click", function(event) {
        event.preventDefault();
        scrolUp.scrollIntoView({ behavior: 'smooth' });
    });


    var salebtn = document.getElementById("saleBTN");
    var saleDown = document.getElementById("saleScroll");

    salebtn.addEventListener("click", function(event) {
        event.preventDefault();
        saleDown.scrollIntoView({ behavior: 'smooth' });
    });


    var servicebtn = document.getElementById("serviceBTN");
    var serviceDown = document.getElementById("serviceScroll");

    servicebtn.addEventListener("click", function(event) {
        event.preventDefault();
        serviceDown.scrollIntoView({ behavior: 'smooth' });
    });

});

