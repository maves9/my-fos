<section class="fileBrowser-wrap">
  <ul class="fileBrowser" id="fileBrowser"><!-- List of ZIP content -->

    <li><!-- lvl 1 Choose all -->
      <input type="checkbox" id="allFiles" />
      Choose all
    </li>

    <li class="folder">
      <section class="folder_title openClose">
        <input type="checkbox" />
        <i class="material-icons">folder</i>
        <span class="openClose">Webbanners</span>
      </section>
      <ul>
        <li class="banner_view_select" title="ALPHA2_circulator_webbanner_300x250px_ENGLISH.jpg">
          <input type="checkbox" name="banners[]" value="ALPHA2_circulator_webbanner_300x250px_ENGLISH.jpg" />
          <i class="material-icons">image</i>
          ALPHA2_circulator_webbanner_300x250px_ENGLISH.jpg
        </li>
        <li class="banner_view_select" title="ALPHA2_circulator_webbanner_728x90px_ENGLISH.jpg">
          <input type="checkbox" name="banners[]" value="ALPHA2_circulator_webbanner_728x90px_ENGLISH.jpg" />
          <i class="material-icons">image</i>
          ALPHA2_circulator_webbanner_728x90px_ENGLISH.jpg
        </li>
      </ul>
    </li>
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
    <span>ALPHA2_circulator_webbanner_300x250px_ENGLISH.jpg</span>
  </p>
  <img id="banner_viewer"  src="zip/ALPHA2/Webbanners/ALPHA2_circulator_webbanner_300x250px_ENGLISH.jpg">
  <div class="embed">
    <div class="embed--button">Embed</div>
    <input type="text"></input>
    <p>Don't know how to use embed? <a href="">Learn more</a></p>
  </div>
</section>
