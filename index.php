<!DOCTYPE html>
<html>
 <head>
  <title>demo</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="css/master.css">
 </head>

 <body>


   <link rel="stylesheet" href="css/intern.css" type="text/css">

   <link rel="stylesheet" href="css/filemanager.css" type="text/css">

   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

   <!-----------Search-------------------->
   <article class="modulebox myGrundfos-widget search">
   <h3 class="search__h3">What are you looking for?</h3>

    <label class="form-group gflabel search__label">Search in all or select a category</label>

    <form id="template-form">

   	    <section class="input-group search__section">

   			<input class="search__textinput" type="text" name="search" id="search" placeholder="Search" >

        <button class="search__btn" type="submit">
   					<i class="material-icons search__i">search</i>
            </button>
        </section>

   		<select name="categories" class="search__select" required>
   			<option value="all" class="search__select__option">All categories</option>
   			<option value="replace" class="search__select__option">Replace pump</option>
   			<option value="spare-parts" class="search__select__option">Spare parts</option>
   			<option value="order" class="search__select__option">Order status</option>
   			<option value="list-pris" class="search__select__option">List price</option>
   			<option value="availability" class="search__select__option">Availability</option>
   			<option value="marketing-material" class="search__select__option">Marketing material</option>
             </select>

             <input type="checkbox" class="search__checkbox" name="advanced" id="check">
             <label class="search__checkbox__label">Advanced search options</label>

             <!-----------Advanced search------------>
             <article class="advanced" id="advanced">
             	<form action="">
             		<select name="market-areas" class="advanced__select">
             			<option value="" disabled selected hidden>Market Areas</option>
             			<option value="buildings">Buildings</option>
             			<option value="industry">Industry</option>
             			<option value="water">Water</option>
             		</select>
             		<select name="industries" class="advanced__select">
             			<option value="" disabled selected hidden>Industries</option>
             			<option value="automotive">Automotive industry</option>
             			<option value="biofuel">Biofuel industry</option>
             			<option value="commercial">Commercial buildings</option>
             			<option value="machining">Machining</option>
             			<option value="marine">Marine</option>
             			<option value="mining">Mining industry</option>
             		</select>
             		<select name="applications" class="advanced__select">
             			<option value="" disabled selected hidden>Applications</option>
             			<option value="boiler">Boiler systems</option>
             			<option value="bottle-washing">Bottle washing</option>
             			<option value="cooling">Cooling</option>
             			<option value="disinfection">Disinfection</option>
             		</select>
             		<select name="pump-design" class="advanced__select">
             			<option value="" disabled selected hidden>Pump Design</option>
             			<option value="booster-set">Booster set</option>
             			<option value="canned-rotor">Canned rotor</option>
             			<option value="dosing-pumps">Dosing pumps</option>
             			<option value="encapsulated">Encapsulated</option>
             		</select>
             	</form>
             </article>

   		</form>

   </article>

   <ul id="result"></ul>

   <ul id="resultList"></ul>

   <br/>
  </div>

  <script>
$(document).ready(function(){

  $('.search__checkbox:checked')

    //search
    $.ajaxSetup({ cache: false });

    $('#search').keyup(function(){ // event "keyup"

    $('#result').html(''); //clear results

    var searchField = $('#search').val();

    if (searchField.length > 0) { //only start search if you see a charecter

    var expression = new RegExp(searchField, "i");// "i" for ingnore case sensitive

    $.getJSON('results.json', function(data) {
      $('#result').prepend('<h2 class="text-center">Results for "'+searchField+'"</h2><hr>')
      $.each(data.products, function(key, value){  //loop json products

      if (value.name.search(expression) !== -1 ){ //search regular expression
          //print results
          $('#result').append('<li class="result" data-target="' + key + '"> <img src="result-img/' + value.image + '"/><h3>'
          + value.name +' | pump product</h3></li>');
      }

     });

    });

  }else{// first if statement
        $('#result').html('');
    }
  });

$('#result').on( "click", function() { //clear if browser cliks on result
    $('#result').html('');
});

$('#result').on('click', 'li', function() { //get data of result

    var dataID = $(this).data('target'); //the key

    $.getJSON('results.json', function(data) {

      var name = data.products[dataID].name;
      var imageL = data.products[dataID].imageL;
      var description = data.products[dataID].description;
      var link = data.products[dataID].link;

      $('#resultList').append('<li class="result-list" id="'+name+'">'
      +'<article class="list-item">'
      +'<button id="delete" onclick="sectionDelete(this)" class="close"></button>'
      +'<img class="result-list_image" src="result-img/' + imageL + '"/>'
      +'<section class="result-list_product">'
        +'<h2>'+ name +'</h2><p>' + description + '</p>'
        +'<button class="bookmark"><i class="material-icons book-icon">bookmark_border</i> SAVE TO MY PRODUCTS</button>'
        +'<button data-target="'+name+'">DOWNLOAD ALL</button>'
        +'<button data-target="'+name+'">GRUNDFOS PRODUCT CENTER</button>'
      +'</section></article></li><br>') ;

      call(name); //call filemaneger
    });


        if($("#resultList").children().length === 0) {
          $("#resultList").prepend('<h2 class="text-center">Your results</h2><hr>')
        }

    });

});//ducument ready

function call(n) { //callback
  $.ajax({
       type: "GET",
       url: 'zip.php',
       data:{dataT : n},
       success:function(html) {
         $('#resultList li#'+ n +'').append(html);
       }
     });
  // var formData = $('#img-manager').serialize();
  //  console.log('Posting the following: ', formData);
  //
  //  $.ajax({
  //    url: 'zip.php',
  //    data: formData,
  //    type: 'post',
  //    dataType: 'json',
  //    success: function(data) {
  //      //  ... do something with the data...
  //    }
  //  });
}

function sectionDelete(btn) {
    $(btn).parent().parent().remove();
    if($(".result-list").length === 0) { // clear ul if no list-items found
      $("#resultList").children().remove();
    }
}
  </script>

 </body>
</html>
