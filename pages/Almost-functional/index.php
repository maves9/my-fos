<!DOCTYPE html>
<html>
 <head>
  <title>demo</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
 </head>
 <body>

   <h3>products (alpha1 is working)</h3>

    <input type="text" name="search" id="search" placeholder="Search" />

   <ul id="result"></ul>
   <hr>
     <ul id="resultList"></ul>

   <br/>
  </div>
    <script src="zip/js/checkBoxes"></script>
  <script>
  $(document).ready(function(){

    $.ajaxSetup({ cache: false });

    $('#search').keyup(function(){ // event "keyup"

    $('#result').html(''); //clear results

    var searchField = $('#search').val();

    if (searchField.length > 0) { //only start search if you see a charecter

    var expression = new RegExp(searchField, "i");// "i" for ingnore case sensitive

    $.getJSON('results.json', function(data) {

      $.each(data.products, function(key, value){  //loop json products

      if (value.name.search(expression) !== -1 ){ //search regular expression
          //print results
          $('#result').append('<li data-target="' + key + '"><img src="result-img/' + value.image + '"/>'
          + value.name +' | sumfin</li><br>');
      }

     });

    });

    }else{
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

      $('#resultList').append('<li><button onclick="sectionDelete(this)">X</button><img src="result-img/' + imageL + '"/>'
      + name +'<p>' + description + '</p><button id="btn" onclick="zip(this)" data-target="'+name+'">show</button></li><br>') ;

      });

      });

  });

  function zip(x){

    var dataTarget = $(x).data('target');

    $.ajax({
         type: "GET",
         url: 'zip.php',
         data:{dataT : dataTarget},
         success:function(html) {

           $('#resultList').append(html);
         }

    });
  }
  function sectionDelete(btn) {
    $(btn).parent().remove();
  }
  </script>

 </body>
</html>
