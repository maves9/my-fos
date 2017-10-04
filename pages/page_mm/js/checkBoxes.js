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

$('.openClose').click(function(){
	$(this).parent('li').find('ul li').toggle();
});

// Open/Close ZIP Conetent
function myFunction() {
    var x = document.getElementById("zip");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}


//Slideshow
// var slideIndex = 1;
// showSlides(slideIndex);
//
// function plusSlides(n) {
//   showSlides(slideIndex += n);
// }
//
// function currentSlide(n) {
//   showSlides(slideIndex = n);
// }
//
// function showSlides(n) {
//   var i;
//   var slides = document.getElementsByClassName("mySlides");
//   var dots = document.getElementsByClassName("dot");
//   if (n > slides.length) {slideIndex = 1}
//   if (n < 1) {slideIndex = slides.length}
//   for (i = 0; i < slides.length; i++) {
//       slides[i].style.display = "none";
//   }
//   for (i = 0; i < dots.length; i++) {
//       dots[i].className = dots[i].className.replace(" active", "");
//   }
//   slides[slideIndex-1].style.display = "block";
//   dots[slideIndex-1].className += " active";
// }};
