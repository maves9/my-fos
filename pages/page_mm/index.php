<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/master.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <title>Marketing Materials</title>

  <link rel="stylesheet" href="css/intern.css" type="text/css">
  <link rel="stylesheet" href="css/niko.css" type="text/css">
</head>

<body>
  <?php include("include/zip.php"); ?>

  <article class="mm">
    <img class="mm_image" src="img/product2.png" alt="Product Image">

    <section class="mm_product">
      <button class="bookmark"><i class="material-icons book-icon">bookmark_border</i> SAVE TO MY PRODUCTS</button>
      <button class="close"></button>

      <h2 class="product">ALPHA2 32-40 180</h2>
      <p class="product_number">97993203</p>
      <p class="product_info">Hvis du vil have markedets højeste energieffektivitet, ikke vil gå på kompromis med driftssikkerheden, og pumpen samtidig skal være nem at installere, så er ALPHA2 det oplagte valg. Pumpen er baseret på verdens bedst sælgende cirkulationspumpe til en- og tofamiliehuse, og med et
gennemgribende redesign er ydelsen nu fuldstændig fremtidssikret.</p>

      <button class="btn_grundfos-product-center">GRUNDFOS PRODUCT CENTER</button>
      <button>DOWNLOAD ALL</button>
    </section>

    <section class="files">
      <ul class="files_nav">
        <li class="zip_tab" onclick="myFunction()">Images</li>
        <li class="zip_tab">Banner</li>
        <li class="zip_tab">Film</li>
        <li class="zip_tab">Unique Selling Points</li>
        <li class="zip_tab">Example</li>
      </ul>

      <section id="zip">

        <?php include("include/zip_images.php"); ?>

      </section>
    </section>
  </article>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/checkBoxes"></script>

</body>
</html>
