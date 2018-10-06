$( document ).ready(function() {
	$('#file-download-btn').click(function () {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
// debugger;
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

	// debugger;
	$('#modal_form, #overlay').click( function() {
        // debugger;
		$('#modal_form').animate({opacity: 0, top: '45%'}, 200, function() {
			$(this).css('display', 'none').empty();
			$('#overlay').fadeOut(400);
		});
	});

	$('.pic').click(function() {
        // debugger;
		var url = 'images/' + this.getAttribute("data-pik") + '.png'		
			, img = new Image();
			
		img.onload = function() {
			$('#modal_form').css({
				'margin-left': '-' + this.width/2 + 'px'
				, 'margin-top': '-' + this.height/2 + 'px'
				, 'width': this.width
				, 'height': this.height
			}).append(this);
			
			$('#overlay').fadeIn(400, function() {
				$('#modal_form') 
				.css('display', 'block')
				.animate({opacity: 1, top: '50%'}, 200);
			});
		};
		
		img.src = url;
	});
});