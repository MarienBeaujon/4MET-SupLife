$(function(){
	$("#loginform").validate({
		rules: {
			email: {
				required:true,
				email: true
			},
			password: {
				required:true
			}
		},
		messages: {
			email: {
				required: "* Please enter an email address.",
				email: "* Please enter a valid email address.",

				},
			password: {
				required: "* Please enter your password."
			}
			}		
	});
});

$(function(){
	
	$.validator.addMethod('strongPassword', function(value, element) {
		return this.optional(element)
		|| value.length >= 6
		&& /\d/.test(value)
		&& /[a-z]/i.test(value);
	}, '* Your password must be at least 6 characters long and contains at least one number and one char')

		
	$.validator.addMethod('strongEmail', function(value, element) {
		return /[0-9]{6}@supinfo.com/.test(value);
	}, '* Please enter your supinfo email address')
		
		
	$("#signupform").validate({
		rules: {
			firstName: {
				required: true,
				nowhitespace: true,
				lettersonly: true
			},
			lastName: {
				required: true,
				nowhitespace: true,
				lettersonly: true
			},
			email: {
				required: true,
				email: true,
				strongEmail: true
			},
			genderRadio: "required",
			yearRadio: "required",
			password: {
				required: true,
				strongPassword: true
			},
			verifyPassword: {
				required: true,
				equalTo: "#password"
			}
		},
		messages: {
			firstName: {
				required: "* Please enter your first name.",
				nowhitespace:"* Please remove any white space.",
				lettersonly: "* Please insert only letters."
				},
			lastName: {
				required: "* Please enter your last name.",
				nowhitespace:"* Please remove any white space.",
				lettersonly: "* Please insert only letters."
				},	
			genderRadio: {
				required: "* Please select your gender.",
				},
			yearRadio: {
				required: "* Please select your school year.",
				},
			email: {
				required: "* Please enter an email address.",
				},
			password: {
				required: "* Please enter your password."
				},
			verifyPassword: {
				required: "* Please verify your password.",
				equalTo: "* These passwords don't match."
				}			
			}		
	});
});


