$('.allFiles').change(function(){
	var folders = $(this).parent('li').parent('ul').find("li section input, li ul li input");
	if ($(this).is(':checked')) {

    	folders.prop('checked', true);
	}
	else {
		folders.prop('checked', false);
	}
});
$('.folder input').change(function(){
	if ($(this).is(':checked')) {
    	$(this).parent('section').parent('li').find('ul li input').prop('checked', true);

	}
	else {
		$(this).parent('section').parent('li').find('ul li input').prop('checked', false);
	}
});

$('.openClose span').click(function(){
	$(this).parent('section').parent('li').find('ul li').toggle();
});

// disclaimer
$('.download').click(function() {
	if ($(".fileBrowser input:checkbox:checked").length > 0) {
	    // if any one is checked
	    $('#modal').fadeIn(300);
	    $('.dlError').text('');
	    if($('#accept').css('display') === 'none') {
	    	$('#modal').delay(4000).fadeOut(300);
	    }
	}
	else {
	   // no one is checked
	   $('.dlError').text('No files were selected');
	}
});
$('#decline').click(function() {
	$('#modal').fadeOut(300);
});
$('#accept').click(function() {
	$('#disclaimer, #accept, #decline, #modal h3').fadeOut(300);
	$('#modal').delay(4000).fadeOut(300);
	$('#loadZip').delay(300).fadeIn(300);
});

// tabs click to show content
$('.zip_tab').click(function(){

	var thisVal = $(this).val();

	//$(".zip_content").hide();
	$('.zip_content:nth-child( ' + (thisVal + 1) + ' )').toggle();
});


// choose file display

// pdf_viewer

$(".pdf_view_select").click(function() {
	var name = $(this).attr('title');

	// fade out , change , fadein
	$('#pdf_viewer').fadeOut(300, function() {
	    $("#pdf_viewer").attr("src","zip/ALPHA2/Unique Selling Points(USP)/" + name + "");
	    $('#pdf_viewer').fadeIn(2000);
	});
});

// images
$(".img_view_select").click(function() {
	var name = $(this).attr('title');
	var embedLink = '<iframe src="www.grundfos.com/img/' + name + '"></iframe>';

	$("#img_viewer").attr("src","zip/ALPHA2/Images/Web/" + name + "");
	// show filename
	$('.img_display .fileDisplay--name span').text(name);
		// change embed link
	$(".embed input").attr("value",embedLink);

});
// webbanner
$(".banner_view_select").click(function() {
	var name = $(this).attr('title');
	var embedLink = '<iframe src="www.grundfos.com/img/' + name + '"></iframe>';

	$("#banner_viewer").attr("src","zip/ALPHA2/Webbanners/" + name + "");
	// show filename
	$('.img_display .fileDisplay--name span').text(name);
	// change embed link
	$(".embed input").attr("value",embedLink);
});
