<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/master.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <title>Marketing Materials</title>
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
        <li>Images</li>
        <li>Banner</li>
        <li>Film</li>
        <li>Unique Selling Points</li>
        <li>Example</li>
      </ul>

      <section class="zip">
        <form name="zips" method="post">

          <!-- List of ZIP content -->
          <ul class="fileBrowser" id="fileBrowser">

            <!-- lvl 1 Choose all -->
            <li>
              <input type="checkbox" id="allFiles" />
              Choose all
            </li>

            <li class="folder"> <!-- lvl 1 Images -->
              <input type="checkbox" id="allImages" />
              <img src="img/name.png" class="smallThumb folder" alt="thumbnail">
              <span class="openClose">Images</span>

              <ul> <!-- lvl 2 subfolder -->
                <li class="subfolder"> <!-- lvl 3 Print -->
                  <input type="checkbox" class="img" id="allPrints" />
                  <img src="img/name.png" class="smallThumb" alt="thumbnail">
                  <span class="openClose">Print</span>

                  <ul>
                    <li>
                      <input type="checkbox" class="img" name="prints[]" value="ALPHA2_application_image.tiff" />
                      <img src="img/name.png" class="smallThumb" alt="thumbnail">
                      ALPHA2_application_image.tiff
                    </li>
                    <li>
                      <input type="checkbox" class="img" name="prints[]" value="ALPHA2_left_product_image.tif" />
                      <img src="img/name.png" class="smallThumb" alt="thumbnail">
                      ALPHA2_left_product_image.tif
                    </li>
                    <li>
                      <input type="checkbox" class="img" name="prints[]" value="ALPHA2_product_image_right.tiff" />
                      <img src="img/name.png" class="smallThumb" alt="thumbnail">
                      ALPHA2_product_image_right.tiff
                    </li>
                    <li>
                      <input type="checkbox" class="img" id="bum" name="prints[]" value="ALPHA2_w_shells_right_product_image.tiff" />
                      <img src="img/name.png" class="smallThumb" alt="thumbnail">
                      ALPHA2_w_shells_right_product_image.tiff
                    </li>
                  </ul>
                </li> <!-- END lvl 3 Print -->

                <!-- lvl 3 Web -->
                <li class="subfolder">
                  <input type="checkbox" class="img" id="allWebs" />
                  <img src="img/name.png" class="smallThumb" alt="thumbnail">
                  <span class="openClose">Web</span>

                  <ul>
                    <li>
                      <input type="checkbox" class="img" name="webs[]" value="ALPHA2_application_image_1200x800px.jpg" />
                      <img src="img/name.png" class="smallThumb" alt="thumbnail">
                      ALPHA2_application_image_1200x800px.jpg
                    </li>
                    <li>
                      <input type="checkbox" class="img" name="webs[]" value="ALPHA2_application_image_1200x800px.png" />
                      <img src="img/name.png" class="smallThumb" alt="thumbnail">
                      ALPHA2_application_image_1200x800px.png
                    </li>
                    <li>
                      <input type="checkbox" class="img" name="webs[]" value="ALPHA2_product_image_62x62px.jpg" />
                      <img src="img/name.png" class="smallThumb" alt="thumbnail">
                      ALPHA2_product_image_62x62px.jpg
                    </li>
                    <li>
                      <input type="checkbox" class="img" name="webs[]" value="ALPHA2_product_image_62x62px.png" />
                      <img src="img/name.png" class="smallThumb" alt="thumbnail">
                      ALPHA2_product_image_62x62px.png
                    </li>
                    <li>
                      <input type="checkbox" class="img" name="webs[]" value="ALPHA2_product_image_1200x1200px.jpg" />
                      <img src="img/name.png" class="smallThumb" alt="thumbnail">
                      ALPHA2_product_image_1200x1200px.jpg
                    </li>
                    <li>
                      <input type="checkbox" class="img" name="webs[]" value="ALPHA2_product_image_1200x1200px.png" />
                      <img src="img/name.png" class="smallThumb" alt="thumbnail">
                      ALPHA2_product_image_1200x1200px.png
                    </li>
                  </ul>
                </li>
              </ul> <!-- END lvl 2 subfolder -->
            </li> <!-- END lvl 1 Images -->


            <!-- lvl 1 Unique Selling Points -->
            <li class="folder">
              <input type="checkbox" />
              <img src="img/name.png" class="smallThumb" alt="thumbnail">
              <span class="openClose">Unique Selling Points / USP</span>

              <ul>
                <li>
                  <input type="checkbox" id="bums" name="usps[]" value="ALPHA2_USPs.docx" />
                  <img src="img/name.png" class="smallThumb doc" alt="thumbnail">
                  ALPHA2_USPs.docx
                </li>
              </ul>
            </li>

            <!-- lvl 1 Webbanner -->
            <li class="folder">
              <input type="checkbox" />
              <img src="img/name.png" class="smallThumb" alt="thumbnail">
              <span class="openClose">Webbanners</span>

              <ul>
                <li>
                  <input type="checkbox" name="banners[]" value="ALPHA2_circulator_webbanner_300x250px_ENGLISH.jpg" />
                  <img src="img/name.png" class="smallThumb banner" alt="thumbnail">
                  ALPHA2_circulator_webbanner_300x250px_ENGLISH.jpg
                </li>
                <li>
                  <input type="checkbox" name="banners[]" value="ALPHA2_circulator_webbanner_728x90px_ENGLISH.jpg" />
                  <img src="img/name.png" class="smallThumb banner" alt="thumbnail">
                  ALPHA2_circulator_webbanner_728x90px_ENGLISH.jpg
                </li>
              </ul>
            </li>
          </ul> <!-- END List of ZIP content -->

              <br/>
              <br/>
              <br/>
              <input type="submit" name="createpdf" value="Download" />&nbsp;
              <!--input type="reset" name="reset" value="Reset" /></td-->
        </form>
      </section>
    </section>
  </article>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/checkBoxes"></script>

</body>
</html>
