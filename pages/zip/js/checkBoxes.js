
$('#allFiles').change(function(){
	if ($('#allFiles').is(':checked')) {
    	$("#fileBrowser li input").prop('checked', true);
	}
	else {
		$("#fileBrowser li input").prop('checked', false);
	}
});
$('.folder input').change(function(){
	if ($(this).is(':checked')) {
    	$(this).parent('li').find('ul li input').prop('checked', true);

	}
	else {
		$(this).parent('li').find('ul li input').prop('checked', false);
	}
});