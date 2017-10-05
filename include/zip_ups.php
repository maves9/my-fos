<section class="fileBrowser-wrap">
  <ul class="fileBrowser"><!-- List of ZIP content -->

    <li><!-- lvl 1 Choose all -->
      <input type="checkbox" class="allFiles" />
      Choose all
    </li>

    <li class="folder">
      <section class="folder_title openClose">
        <input type="checkbox" />
        <i class="material-icons">folder</i>
        <span class="openClose">Documents</span>
      </section>
      <ul>
        <li class="pdf_view_select" title="ALPHA1 L USP.pdf">
          <input type="checkbox" name="usps[]" value="ALPHA1 L USP.pdf" />
          <i class="material-icons">image</i>
          ALPHA1 L USP.pdf
        </li>
        <li class="pdf_view_select" title="ALPHA1_USPs.pdf">
          <input type="checkbox" name="usps[]" value="ALPHA1_USPs.pdf" />
          <i class="material-icons">image</i>
          ALPHA1_USPs.pdf
        </li>
        <li class="pdf_view_select" title="ALPHA2_USPs.pdf">
          <input type="checkbox" name="usps[]" value="ALPHA2_USPs.pdf" />
          <i class="material-icons">image</i>
          ALPHA2_USPs.pdf
        </li>
      </ul>
    </li>
  </ul> <!-- END List of ZIP content -->

  <section class="download">
    <i class="material-icons">file_download</i><input type="button" value="Print" /><br/>
    <i class="material-icons">file_download</i><input type="button" value="Embed" /><br/>
    <i class="material-icons">file_download</i><input type="button" value="Download" />
    <p class="dlError"></p>
  </section>
</section>

<section class="fileDisplay">
	<embed id="pdf_viewer"  src="zip/ALPHA2/Unique Selling Points(USP)/ALPHA1 L USP.pdf" width="100%" height="100%" type='application/pdf'>
</section>
