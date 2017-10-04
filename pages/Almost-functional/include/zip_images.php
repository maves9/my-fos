

<section class="fileBrowser-wrap">
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
          <li class="img_view_select" title="ALPHA2_application_image_1200x800px.jpg">
            <input type="checkbox" class="img" name="webs[]" value="ALPHA2_application_image_1200x800px.jpg" />
            <i class="material-icons">image</i>
            ALPHA2_application_image_1200x800px.jpg
          </li>
          <li class="img_view_select" title="ALPHA2_application_image_1200x800px.png">
            <input type="checkbox" class="img" name="webs[]" value="ALPHA2_application_image_1200x800px.png" />
            <i class="material-icons">image</i>
            ALPHA2_application_image_1200x800px.png
          </li>
          <li class="img_view_select" title="ALPHA2_product_image_62x62px.jpg">
            <input type="checkbox" class="img" name="webs[]" value="ALPHA2_product_image_62x62px.jpg" />
            <i class="material-icons">image</i>
            ALPHA2_product_image_62x62px.jpg
          </li>
          <li class="img_view_select" title="ALPHA2_product_image_62x62px.png">
            <input type="checkbox" class="img" name="webs[]" value="ALPHA2_product_image_62x62px.png" />
            <i class="material-icons">image</i>
            ALPHA2_product_image_62x62px.png
          </li>
          <li class="img_view_select" title="ALPHA2_product_image_1200x1200px.jpg">
            <input type="checkbox" class="img" name="webs[]" value="ALPHA2_product_image_1200x1200px.jpg" />
            <i class="material-icons">image</i>
            ALPHA2_product_image_1200x1200px.jpg
          </li>
          <li class="img_view_select" title="ALPHA2_product_image_1200x1200px.png">
            <input type="checkbox" class="img" name="webs[]" value="ALPHA2_product_image_1200x1200px.png" />
            <i class="material-icons">image</i>
            ALPHA2_product_image_1200x1200px.png
          </li>
        </ul>
      </li> <!-- END lvl 2 Web -->
    </ul> <!-- END IMAGES CONTENT -->
  </ul> <!-- END List of ZIP content -->
  <section class="download">
    <i class="material-icons">file_download</i><input type="button" value="Print" /><br/>
    <i class="material-icons">file_download</i><input type="button" value="Embed" /><br/>
    <i class="material-icons">file_download</i><input type="button" value="Download" />
    <p id="dlError"></p>
  </section>



  </section>


<section class="fileDisplay img_display">
  <p class="fileDisplay--name">
    <em>File name //</em>
    <span>ALPHA2_application_image.tiff</span>
  </p>
  <img id="img_viewer"  src="zip/ALPHA2/Images/Web/ALPHA2_application_image_1200x800px.jpg">
  <div class="embed">
    <div class="embed--button">Embed</div>
    <input type="text"></input>
    <p>Don't know how to use embed? <a href="">Learn more</a></p>
  </div>
</section>
