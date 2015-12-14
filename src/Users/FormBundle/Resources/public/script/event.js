$(function(){
	$("#eventform").validate({
		rules: {
			eventName: {
				required: true,
			},
			eventDescription: {
				required: true,
			},
			eventStartDate : {
				required: true,
			},
			eventEndDate : {
				required: true,
			},
			eventAddress : {
				required: true,
			},
			eventHost : {
				required: true,
			},
			eventPhoto: {
				required: true, 
				accept: "png|jpe?g", 
				filesize: 5000000 
			}
		},
		messages: {
			eventName: {
				required: "* Please enter the event name.",
				},
			eventDescription: {
				required: "* Please enter the event description.",
				},	
			eventStartDate: {
				required: "* Please select the event start date.",
				},
			eventEndDate: {
				required: "* Please select the event end date.",
				},
			eventHost: {
				required: "* Please select the event host.",
				},
			eventPhoto: {
				required: "* File must be JPG, GIF or PNG and less than 5MB.",
				}			
			}		
	});
});

