$( document ).ready(function() {
    var validateEmail = function(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    };

    $("#next-button").click(function () {
        var email = $("#email").val().trim(),
            pass = $("#pass").val().trim(),
            token = $('meta[name="csrf-token"]').attr('content');

        if (!validateEmail(email)) {
            alert("Не верный email");
            return;
        } else if (pass == '') {
            alert("Пустой пароль");
            return;
        }

        $("#pay-button-container").empty();

        $.ajax({
            url: '/get_pay_button',
            type: 'POST',
            data: {
                _token: token,
                email: email,
                pass: pass,
                key: $(this).data('key')
            },
            dataType: 'JSON',
            success: function (data) {
                $("#pay-button-container").append(data.html);
                $(".second-step").css('display', 'block');
                $("#next-button").hide();
                $("#email").attr('disabled', 'disabled');
                $("#pass").attr('disabled', 'disabled');
            }
        });
    });

	$('#file-download-btn').click(function () {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            url: '/download',
            type: 'POST',
            data: {_token: CSRF_TOKEN},
            dataType: 'JSON',
            success: function (data) {
                console.log(data);
            }
        });
    });

	$('#modal_form, #overlay').click( function() {
		$('#modal_form').animate({opacity: 0, top: '45%'}, 200, function() {
			$(this).css('display', 'none').empty();
			$('#overlay').fadeOut(400);
		});
	});
});