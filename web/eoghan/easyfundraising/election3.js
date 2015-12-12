$(function() {

    $("input,textarea").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // additional error messages or events
        },
        submitSuccess: function($form, event) {
            // Prevent spam click and default submit behaviour
            $("#btnSubmit").attr("disabled", true);
            event.preventDefault();
            
           // get values from FORM
            var playerName = $("input#playerName").val();
            var email = $("input#email").val();
            var phone = $("input#phone").val();
			var question1=  ($('input[name=q1]:checked').val());
			var question2=  ($('input[name=q2]:checked').val());
			var question3=  ($('input[name=q3]:checked').val());
			var question4=  ($('input[name=q4]:checked').val());
			var question5=  ($('input[name=q5]:checked').val());
			var question6=  ($('input[name=q6]:checked').val());
			var question7=  ($('input[name=q7]:checked').val());
            var firstName = name; // For Success/Failure Message
            // Check for white space in name for Success/Fail message
            if (firstName.indexOf(' ') >= 0) {
                firstName = name.split(' ').slice(0, -1).join(' ');
            }
            $.ajax({
                url: "./mail/memberEntry.php",
                type: "POST",
                 data: {
                    playerName: playerName,
                    email: email,
                    phone: phone,
					question1:question1,
					question2:question2,
					question3:question3,
					question4:question4,
					question5:question5,
					question6:question6,
					question7:question7
                },
                cache: false,
                success: function() {
				
				var windowlink = "http://www.easyfundraising.ie";

                    window.location = windowlink;

                    //clear all fields
                    //$('#contactForm').trigger("reset");
                },
                error: function() {
                    // Fail message
                    $('#success').html("<div class='alert alert-danger'>");
                    $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-danger').append("<strong>Sorry " + firstName + ", it seems that my mail server is not responding. Please try again later!");
                    $('#success > .alert-danger').append('</div>');
                    //clear all fields
                    $('#contactForm').trigger("reset");
                },
            })
        },
        filter: function() {
            return $(this).is(":visible");
        },
    });

    $("a[data-toggle=\"tab\"]").click(function(e) {
        e.preventDefault();
        $(this).tab("show");
    });
});

// When clicking on Full hide fail/success boxes
$('#name').focus(function() {
    $('#success').html('');
});
