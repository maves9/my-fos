
$('#allFiles').change(function(){
	if ($('#allImages').is(':checked')) {
    	$(".img").prop('checked', true);
	}
	else {
		$(".img").prop('checked', false);
	}
});
