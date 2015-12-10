$(document).ready( function(){
        // Initialisation
        $('#signupbox').hide();
        
        function validateForm() {
            var x = document.forms["loginform"]["email"].value;
            var y = document.forms["loginform"]["password"].value;

                if (x == null || x == "" && y == null || y == ""){
                        alert("Please enter your email and password");
                        }
                        return false;
                }

        $('#loginform').submit(function() {
            validateEmail($('input').$('email').val());
            //alert('HEY TY');
            return false;
        });

        function validateEmail(email) {
                var priceRegex = /^[0-9]{6}@supinfo.com$/i;

                if (email.match(priceRegex)) {
                    alert('Logged IN');
                } else {
                    alert('Please insert a supinfo email');
                }
        }
    }
);