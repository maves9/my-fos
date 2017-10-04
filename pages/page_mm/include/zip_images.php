<form name="zips" method="post">
  <ul class="fileBrowser" id="fileBrowser"><!-- List of ZIP content -->

    <li><!-- lvl 1 Choose all -->
      <input type="checkbox" id="allFiles" />
      Choose all
    </li>

    <ul> <!-- IMAGES CONTENT -->
      <li class="folder"> <!-- lvl 2 Print -->
        <section class="folder_title openClose">
          <input type="checkbox" class="img" id="allPrints" />
          <i class="material-icons">folder</i>
          <span>Print</span>
        </section>

        <ul>
          <li>
            <input type="checkbox" class="img" name="prints[]" value="ALPHA2_application_image.tiff" />
            <i class="material-icons">image</i>
            ALPHA2_application_image.tiff
          </li>
          <li>
            <input type="checkbox" class="img" name="prints[]" value="ALPHA2_left_product_image.tif" />
            <i class="material-icons">image</i>
            ALPHA2_left_product_image.tif
          </li>
          <li>
            <input type="checkbox" class="img" name="prints[]" value="ALPHA2_product_image_right.tiff" />
            <i class="material-icons">image</i>
            ALPHA2_product_image_right.tiff
          </li>
          <li>
            <input type="checkbox" class="img" id="bum" name="prints[]" value="ALPHA2_w_shells_right_product_image.tiff" />
            <i class="material-icons">image</i>
            ALPHA2_w_shells_right_product_image.tiff
          </li>
        </ul>
      </li> <!-- END lvl 2 Print -->

      <li class="folder"> <!-- lvl 2 Web -->
        <section class="folder_title openClose">
          <input type="checkbox" class="img" id="allWebs" />
          <i class="material-icons">folder</i>
          <span>Web</span>
        </section>

        <ul>
          <li>
            <input type="checkbox" class="img" name="webs[]" value="ALPHA2_application_image_1200x800px.jpg" />
            <i class="material-icons">image</i>
            ALPHA2_application_image_1200x800px.jpg
          </li>
          <li>
            <input type="checkbox" class="img" name="webs[]" value="ALPHA2_application_image_1200x800px.png" />
            <i class="material-icons">image</i>
            ALPHA2_application_image_1200x800px.png
          </li>
          <li>
            <input type="checkbox" class="img" name="webs[]" value="ALPHA2_product_image_62x62px.jpg" />
            <i class="material-icons">image</i>
            ALPHA2_product_image_62x62px.jpg
          </li>
          <li>
            <input type="checkbox" class="img" name="webs[]" value="ALPHA2_product_image_62x62px.png" />
            <i class="material-icons">image</i>
            ALPHA2_product_image_62x62px.png
          </li>
          <li>
            <input type="checkbox" class="img" name="webs[]" value="ALPHA2_product_image_1200x1200px.jpg" />
            <i class="material-icons">image</i>
            ALPHA2_product_image_1200x1200px.jpg
          </li>
          <li>
            <input type="checkbox" class="img" name="webs[]" value="ALPHA2_product_image_1200x1200px.png" />
            <i class="material-icons">image</i>
            ALPHA2_product_image_1200x1200px.png
          </li>
        </ul>
      </li> <!-- END lvl 2 Web -->
    </ul> <!-- END IMAGES CONTENT -->
  </ul> <!-- END List of ZIP content -->

  <section class="download">
    <i class="material-icons">file_download</i><input type="submit" name="createpdf" value="Download" />
  </section>
</form>


<div class="slideshow-container">
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="./ALPHA1/Images/Web/ALPHA1_circulator_application_image_1200x800px.jpg" style="width:100%">
    <div class="text">Caption Text</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="./ALPHA1/Images/Web/ALPHA1_circulator_product_image_62x62px.jpg" style="width:100%">
    <div class="text">Caption Two</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="./ALPHA1/Images/Web/ALPHA1_circulator_product_image_1200x1651px.jpg" style="width:100%">
    <div class="text">Caption Three</div>
  </div>

  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
              <i class="material-icons prev">keyboard_arrow_left</i>
              <i class="material-icons next">keyboard_arrow_right</i>
