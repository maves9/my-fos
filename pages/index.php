<!DOCTYPE html>
<html>
 <head>
  <title>demo</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="css/master.css">
 </head>
 <style media="screen">
 /*search*/


   #result li, button{
     cursor: pointer;
   }

/*File maneger*/

   .folder {
     background-color: #bbb;
   }
   .subfolder {
     background-color: #ccc;
   }
   .filebrowser {
     padding: 20px;
     overflow: hidden;
   }
   .fileBrowser,
   .fileBrowser li {
     list-style-type: none;
      margin-bottom: 5px;
   }

   input[type=checkbox] {
     width: 18px;

   }
   input[type=checkbox]not(:checked) {
     background-color: blue;
   }
   span {
     cursor: pointer;
     padding-right: 200px;

   }

 </style>
 <body>



   <link rel="stylesheet" href="css/intern.css" type="text/css">
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <link rel="stylesheet" href="css/niko.css" type="text/css">
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
      $('#result').prepend('<h2 class="text-center">Results</h2><hr>')
      $.each(data.products, function(key, value){  //loop json products

      if (value.name.search(expression) !== -1 ){ //search regular expression
          //print results
          $('#result').append('<li class="result" data-target="' + key + '"> <img src="result-img/' + value.image + '"/><h2>'
          + value.name +' | circular pump</h2></li>');
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

      $('#resultList').prepend('<li class="result-list" id="'+name+'">'
      +'<article class="list-item">'
      +'<button id="delete" onclick="sectionDelete(this)">X</button>'
      +'<img class="result-list_image" src="result-img/' + imageL + '"/>'
      +'<section class="result-list_product">'
        +'<h2>'+ name +'</h2><p>' + description + '</p>'
        +'<button id="btnZip" onclick="zip(this)" data-target="'+name+'">Materials</button>'
      +'</section></article></li><br>') ;

        });

    });

  });

function zip(x){
    var $this = $(this);
    var dataTarget = $(x).data('target');
    var thisBtn = $('#btnZip[data-target="'+dataTarget+'"]');

    $.ajax({
         type: "GET",
         url: 'zip.php',
         data:{dataT : dataTarget},
         success:function(html) {
           thisBtn.parent().parent().parent('#'+dataTarget).append(html);
           console.log(html);
         }
    });

    $(this).ajaxComplete(function() {

      thisBtn.removeAttr('onclick');

      thisBtn.on('click',function() {

      $('#zipHTML').toggleClass("hide");

    });
});

}

function sectionDelete(btn) {
    $(btn).parent().parent().remove();
}
  </script>

 </body>
</html>
