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
	if ($("#fileBrowser input:checkbox:checked").length > 0) {
	    // if any one is checked
	    $('#modal').fadeIn(300);
	    $('#dlError').text('');
	    if($('#accept').css('display') == 'none') {
	    	$('#modal').delay(4000).fadeOut(300);
	    }
	}
	else {
	   // no one is checked
	   $('#dlError').text('No files were selected');
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
// Open/Close ZIP Conetent
/*function myFunction() {
    var x = document.getElementById("zip");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}*/
$('.zip_tab').click(function(){
	//$(this).addClass("whitebg");

	var thisVal = $(this).val();

	$(".zip_content").hide();
	$('.zip_content:nth-child( ' + (thisVal) + ' )').show();
});


// choose file display

// pdf_viewer

$(".pdf_view_select").click(function() {
	var name = $(this).attr('title');
	console.log(name);
	$("#pdf_viewer").attr("src","./ALPHA1/Unique Selling Points(USP)/" + name + "");
});
// images
$(".img_view_select").click(function() {
	var name = $(this).attr('title');
	console.log(name);
	$("#img_viewer").attr("src","./ALPHA2/Images/Web/" + name + "");
	$('.img_display .fileDisplay--name span').text(name);
});
// webbanner
$(".banner_view_select").click(function() {
	var name = $(this).attr('title');
	console.log(name);
	$("#banner_viewer").attr("src","./ALPHA2/Webbanners/" + name + "");
	$('.img_display .fileDisplay--name span').text(name);
});

