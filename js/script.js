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

});