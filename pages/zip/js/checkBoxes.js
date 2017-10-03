
$('#allFiles').change(function(){
	if ($('#allFiles').is(':checked')) {
    	$(".img").prop('checked', true);
	}
	else {
		$(".img").prop('checked', false);
	}
});
