'use strict';

$(function() {

	/* LOCATIONS SELECT BOX */

	$('#multi').multiSelect();

	$('#selectall').click(function(){
		$('#multi').multiSelect('select_all');
		return false;
	});

	$('#deselectall').click(function(){
		$('#multi').multiSelect('deselect_all');
		return false;
	});


	/* FORM SUBMISSION */

	$('form button').on('click', function(e){

		$('form button').off('click');

		$(this).text('Processing...');

		$('form fieldset, .important').fadeOut();

		var formData = $('form').serializeArray();

		$.ajax({
			method: 'post',
			url: 'lib/brain.php',
			data: formData,
			dataType: 'text',
			success:function(results){
				if (results) {
					$('form button').hide();
					$('.status').html('<p>Thank you, your message has been received.<br> Someone from our team will get back to you shortly.<br> You can still reach us by phone at (617) 247-1933.<p>');
					setTimeout(goHome, 10000);
				};
			}
		});

	});

});


function goHome(){
	window.location.href = '/BoulevardOnTheGreenway.com';
}