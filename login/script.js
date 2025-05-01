document.addEventListener("DOMContentLoaded", function() {
   
    function showRegisterForm() {
        document.getElementById("login").style.visibility = "hidden" ;
        document.getElementById("register").style.visibility = "visible";
    }


    // Event listener for the "Register" link
    document.getElementById("registerLink").addEventListener("click", function(event) {
        event.preventDefault(); // Prevent default link behavior
        showRegisterForm();
    });

    function showResetForm() {
        document.getElementById("login").style.visibility = "hidden" ;
        document.getElementById("resetpassword").style.visibility = "visible";
    }

    // Event listener for the "Register" link
    document.getElementById("resetLink").addEventListener("click", function(event) {
        event.preventDefault(); // Prevent default link behavior
        showResetForm();
    });


    function showloginForm() {  
        document.getElementById("register").style.visibility = "hidden";
        document.getElementById("login").style.visibility = "visible" ;
    }

    document.getElementById("loginLink").addEventListener("click", function(event) {
        event.preventDefault(); // Prevent default link behavior
        showloginForm();
    });

    function showloginForm1(){
        document.getElementById("resetpassword").style.visibility = "hidden";
        document.getElementById("login").style.visibility = "visible" ;
    }

    document.getElementById("login1Link").addEventListener("click", function(event) {
        event.preventDefault(); // Prevent default link behavior
        showloginForm1();
    });


});







