<!DOCTYPE html>
<html>
 <head>
  <title>demo</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<style media="screen">

</style>
 </head>
 <body>

   <h3>products (only 3 results use "a" or "c")</h3>

    <input type="text" name="search" id="search" placeholder="Search" />

   <ul id="result"></ul>
   <br />
  </div>
 </body>
</html>

<script>
$(document).ready(function(){

  $('#search').on('blur', function() { //clear if browser leaves focus
      $('#result').html('');
  });

  $.ajaxSetup({ cache: false });

  $('#search').keyup(function(){ // event "keyup"

  $('#result').html(''); //clear results

  var searchField = $('#search').val();

  if (searchField.length > 0) { //only start search if you see a charecter

  var expression = new RegExp(searchField, "i");// "i" for ingnore case sensitive

  $.getJSON('results.json', function(data) {

    $.each(data.products, function(key, value){  //loop json products

    if (value.name.search(expression) !== -1 ){
        //print results
        $('#result').append('<li><img src="' + value.image + '"/>' + value.name + ' | sumfin</li><br>');
    }
   });
  });
  }else{
      $('#result').html('');
  }
 });
});
</script>
