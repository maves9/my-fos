
<!--------------------- !!! ANDREAS !!! -------------------->
    <section class="files">
      <ul class="files_nav">
        <li class="zip_tab" value="1">Images</li>
        <li class="zip_tab" value="2">Banner</li>
        <li class="zip_tab" value="3">Film</li>
        <li class="zip_tab" value="4">Unique Selling Points</li>
        <li class="zip_tab" value="5">Example</li>
      </ul>
<!--------------------- !!! PHP !!! -------------------->
 <?php
 $error = ""; //error holder
 if(isset($_POST['createpdf']))
 {
      $post = $_POST;
      $print_folder = "zip/ALPHA2/Images/Print/"; // folder to load files
      $web_folder = "zip/ALPHA2/Images/Web/";
      $usp_folder = "zip/ALPHA2/Unique Selling Points, USP/";
      $banner_folder = "zip/ALPHA2/Webbanners/";
      if(extension_loaded('zip'))
      {
           // Checking ZIP extension is available
                        // Checking images are selected
                $zip = new ZipArchive(); // Load zip library
                $zip_name = time().".zip";           // Zip name

           if(isset($post['prints']) and count($post['prints']) > 0)
           {

                if($zip->open($zip_name, ZIPARCHIVE::CREATE)!==TRUE)
                {
                     // Opening zip
                     $error .= "* Sorry ZIP creation failed at this time";
                }
                foreach($post['prints'] as $print)
                {
                     $zip->addFile($print_folder.$print); // Adding files into zip
                }
                $zip->close();
            }

            if(isset($post['webs']) and count($post['webs']) > 0)
            {

                if($zip->open($zip_name, ZIPARCHIVE::CREATE)!==TRUE)
                {
                     // Opening zip web to load webs
                     $error .= "* Sorry ZIP creation failed at this time";
                }
                foreach($post['webs'] as $web)  {
                     $zip->addFile($web_folder.$web); // Adding files into zip
                }
                $zip->close();
            }

            if(isset($post['usps']) and count($post['usps']) > 0)
            {

                if($zip->open($zip_name, ZIPARCHIVE::CREATE)!==TRUE)
                {
                     // Opening zip usp to load usps
                     $error .= "* Sorry ZIP creation failed at this time";
                }
                foreach($post['usps'] as $usp)  {
                     $zip->addFile($usp_folder.$usp); // Adding files into zip
                }
                $zip->close();
            }

            if(isset($post['banners']) and count($post['banners']) > 0)
            {

                if($zip->open($zip_name, ZIPARCHIVE::CREATE)!==TRUE)
                {
                     // Opening zip banner to load banners
                     $error .= "* Sorry ZIP creation failed at this time";
                }
                foreach($post['banners'] as $banner)  {
                     $zip->addFile($banner_folder.$banner); // Adding files into zip
                }
                $zip->close();
            }



                if(file_exists($zip_name))
                {
                     // push to download the zip
                     header('Content-type: application/zip');
                     header('Content-Disposition: attachment; filename="'.$zip_name.'"');
                     readfile($zip_name);
                     // remove zip file is exists in temp path
                     unlink($zip_name);

                }

           else
           {
                $error .= "";
           }
      }
      else
      {
           $error .= "* You dont have ZIP extension";
      }
 }
 ?>

 <form name="zips" method="post" id="img-manager">
 <?php echo $error; ?>

<!--------------------- !!! PHP END !!! -------------------->
<!--------------------- !!! INCLUDES !!! -------------------->

      <section class="hide zip_content" id="zip_img">
        <?php include("include/zip_images.php"); ?>
      </section>
      <section class="hide zip_content" id="zip_banner">
        <?php include("include/zip_banner.php"); ?>
      </section>
      <section class="hide zip_content" id="zip_film">
        <?php include("include/zip_film.php"); ?>
      </section>
      <section class="hide zip_content" id="zip_usp">
        <?php include("include/zip_ups.php"); ?>
      </section>


<!--------------------- !!! MODAL !!! -------------------->

    <article id="modal">
        <h3>Before you download, please read our disclaimer</h3>
        <section id="disclaimer">
          <h4>Disclaimer – Use of Grundfos online promotion materials</h4>
          <p>
              All materials on, distributed through or accessible from, the GRUNDFOS online promotion package are
              provided "as is" and "as available," without warranty of any kind, expressed or implied including but not limited
              to the implied warranties of merchantability, fitness for particular purpose, or non-infringement. Hence
              GRUNDFOS makes no warranty, that the online promotion package or product or services provided on the
              online promotion package, either by GRUNDFOS or on GRUNDFOS behalf will meet your requirements or will
              be uninterrupted, timely, secure or without errors, or that the online promotion package or the servers used by
              GRUNDFOS are free of viruses or bugs or are fully functional or accurate. GRUNDFOS is not responsible for any
              loss of hardware, software or files, caused by the use of the online promotion package or elements
              downloaded or used from/on the online promotion package.
          </p>
          <p>
              In no event shall GRUNDFOS be liable for any direct, special, indirect, consequential, punitive or other damages
              of any kind whatsoever resulting from any cause whatsoever, including but not limited to loss of use, loss of
              profits, or loss of data whether in an action under the theories of contract, negligence, or strict liability or
              otherwise, arising out of or in any way connected with the use of any Grundfos online promotion package or
              any materials, information or documents on or accessed through any Grundfos online promotion package.
          </p>
          <p>
              Copyright notice:<br/>
              The copyright in all materials available in the Grundfos online promotion package is owned by Grundfos
              Holding A/S.
          </p>
          <p>
              Grundfos Holding A/S grants to you a worldwide non-exclusive royalty-free revocable license to use the
              materials in the Grundfos online promotion package only in connection with sales and marketing of Grundfos’
              goods and services. The materials are only to be used as they are and may not be edited, changed or adapted.
          </p><p>
              Grundfos Holding A/S reserves the right to at any time revoke this license, where after you shall immediately
              stop the use of materials from Grundfos online promotion package for future publications.
          </p><p>
              All other rights are reserved.</p>
        </section>
      <section id="loadZip">
      <div id="loadAnim">
        <div class="loadDot"></div>
        <div class="loadDot"></div>
        <div class="loadDot"></div>
        <div class="loadDot"></div>
        <div class="loadDot"></div>
        <p>Your files are being prepared for download</p>
      </div>

    </section>
    <input id="accept" type="submit" name="createpdf" value="Accept" />&nbsp;
    <div class="book-icon" id="decline">Decline</div>

  </article>
<!--------------------- !!! MODAL END !!! -------------------->
  </form>
<!--------------------- !!! PHP FORM END !!! -------------------->
    </section>
  </article>
<!--------------------- !!! ANDREAS END !!! -------------------->

<script src="js/checkBoxes.js"></script>
