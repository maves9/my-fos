<form name="zips" method="post">
  <ul class="fileBrowser" id="fileBrowser"><!-- List of ZIP content -->

    <li><!-- lvl 1 Choose all -->
      <input type="checkbox" id="allFiles" />
      Choose all
    </li>

    <li class="folder">
      <input type="checkbox" />
      <i class="material-icons">folder</i>
      <span class="openClose">Webbanners</span>

      <ul>
        <li>
          <input type="checkbox" name="banners[]" value="ALPHA2_circulator_webbanner_300x250px_ENGLISH.jpg" />
          <i class="material-icons">image</i>
          ALPHA2_circulator_webbanner_300x250px_ENGLISH.jpg
        </li>
        <li>
          <input type="checkbox" name="banners[]" value="ALPHA2_circulator_webbanner_728x90px_ENGLISH.jpg" />
          <i class="material-icons">image</i>
          ALPHA2_circulator_webbanner_728x90px_ENGLISH.jpg
        </li>
      </ul>
    </li>
  </ul> <!-- END List of ZIP content -->

  <section class="download">
    <i class="material-icons">file_download</i><input type="submit" name="createpdf" value="Download" />
  </section>
</form>
