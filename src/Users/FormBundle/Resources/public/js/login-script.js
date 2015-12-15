$('#loginform').submit(function() {
    validateEmail($('input').val());
    return false;
});

function validateEmail(email) {
		var priceRegex = /[0-9]{6}@supinfo.com/;
		
        if (email.match(priceRegex)) {
            alert('Logged IN');
        } else {
            alert('Please insert a supinfo email');
        }
}


