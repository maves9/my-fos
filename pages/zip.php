 <?php
  $name = $_GET['dataT'];
 $error = ""; //error holder
 if(isset($_POST['createpdf']))
 {
      $post = $_POST;
      $print_folder = "zip/".$name."/Images/Print/"; // folder to load files
      $web_folder = "zip/".$name."/Images/Web/";
      $usp_folder = "zip/".$name."/Unique Selling Points, USP/";
      $banner_folder = "zip/".$name."/Webbanners/";
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
                $error .= "* Please select file to zip ";
           }
      }
      else
      {
           $error .= "* You dont have ZIP extension";
      }
 }
 ?>

          <style>
          ul {
            background-color: #eee;
          }
          li {
            background-color: #ddd;
          }
          .folder {
            background-color: #bbb;
          }
          .subfolder {
            background-color: #ccc;
          }
          .filebrowser {
            padding: 20px;
            overflow: hidden;
          }
          .fileBrowser,
          .fileBrowser li {
            list-style-type: none;
             margin-bottom: 5px;
          }

          input[type=checkbox] {
            width: 18px;

          }
          input[type=checkbox]not(:checked) {
            background-color: blue;
          }
          span {
            cursor: pointer;
            padding-right: 200px;

          }

          </style>

           <div class="container">
                <br />
                <br />
                <br />
                <form name="zips" method="post">
                  <?php echo $error; ?>

                    <ul class="fileBrowser" id="fileBrowser">
                        <li>
                            <input type="checkbox" id="allFiles" />
                            Choose all
                        </li>
                        <li class="folder">
                            <input type="checkbox" id="allImages" />
                            <img src="zip/img/icons/name.png" class="smallThumb folder" alt="thumbnail">
                            <span class="openClose">Images</span>
                            <ul>
                                <li class="subfolder">
                                    <input type="checkbox" class="img" id="allPrints" />
                                    <img src="zip/img/icons/name.png" class="smallThumb" alt="thumbnail">
                                    <span class="openClose">Print</span>
                                    <ul>
                                        <li>
                                            <input type="checkbox" class="img" name="prints[]" value="ALPHA2_application_image.tiff" />
                                            <img src="zip/img/icons/name.png" class="smallThumb" alt="thumbnail">
                                            ALPHA2_application_image.tiff
                                        </li>
                                        <li>
                                            <input type="checkbox" class="img" name="prints[]" value="ALPHA2_left_product_image.tif" />
                                            <img src="zip/img/icons/name.png" class="smallThumb" alt="thumbnail">
                                            ALPHA2_left_product_image.tif
                                        </li>
                                        <li>
                                            <input type="checkbox" class="img" name="prints[]" value="ALPHA2_product_image_right.tiff" />
                                            <img src="zip/img/icons/name.png" class="smallThumb" alt="thumbnail">
                                            ALPHA2_product_image_right.tiff
                                        </li>
                                        <li>
                                            <input type="checkbox" class="img" id="bum" name="prints[]" value="ALPHA2_w_shells_right_product_image.tiff" />
                                            <img src="zip/img/icons/name.png" class="smallThumb" alt="thumbnail">
                                            ALPHA2_w_shells_right_product_image.tiff
                                        </li>
                                    </ul>
                                </li>
                                <li class="subfolder">
                                    <input type="checkbox" class="img" id="allWebs" />
                                    <img src="zip/img/icons/name.png" class="smallThumb" alt="thumbnail">
                                    <span class="openClose">Web</span>
                                    <ul>
                                        <li>
                                            <input type="checkbox" class="img" name="webs[]" value="ALPHA2_application_image_1200x800px.jpg" />
                                            <img src="zip/img/icons/name.png" class="smallThumb" alt="thumbnail">
                                            <?php echo $name;?>_application_image_1200x800px.jpg
                                        </li>
                                        <li>
                                            <input type="checkbox" class="img" name="webs[]" value="ALPHA2_application_image_1200x800px.png" />
                                            <img src="zip/img/icons/name.png" class="smallThumb" alt="thumbnail">
                                            <?php echo $name;?>_application_image_1200x800px.png
                                        </li>
                                        <li>
                                            <input type="checkbox" class="img" name="webs[]" value="ALPHA2_product_image_62x62px.jpg" />
                                            <img src="zip/img/icons/name.png" class="smallThumb" alt="thumbnail">
                                            <?php echo $name;?>_product_image_62x62px.jpg
                                        </li>
                                        <li>
                                            <input type="checkbox" class="img" name="webs[]" value="ALPHA2_product_image_62x62px.png" />
                                            <img src="zip/img/icons/name.png" class="smallThumb" alt="thumbnail">
                                            <?php echo $name;?>_product_image_62x62px.png
                                        </li>
                                        <li>
                                            <input type="checkbox" class="img" name="webs[]" value="ALPHA2_product_image_1200x1200px.jpg" />
                                            <img src="zip/img/icons/name.png" class="smallThumb" alt="thumbnail">
                                            <?php echo $name;?>_image_1200x1200px.jpg
                                        </li>
                                        <li>
                                            <input type="checkbox" class="img" name="webs[]" value="ALPHA2_product_image_1200x1200px.png" />
                                            <img src="zip/img/icons/name.png" class="smallThumb" alt="thumbnail">
                                            <?php echo $name;?>_product_image_1200x1200px.png
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="folder">
                            <input type="checkbox" />
                            <img src="zip/img/icons/name.png" class="smallThumb" alt="thumbnail">
                            <span class="openClose">Unique Selling Points / USP</span>
                            <ul>
                                <li>
                                    <input type="checkbox" id="bums" name="usps[]" value="ALPHA2_USPs.docx" />
                                    <img src="zip/img/icons/name.png" class="smallThumb doc" alt="thumbnail">
                                    <?php echo $name;?>_USPs.docx
                                </li>
                            </ul>
                        </li>
                        <li class="folder">
                            <input type="checkbox" />
                            <img src="zip/img/icons/name.png" class="smallThumb" alt="thumbnail">
                            <span class="openClose">Webbanners</span>
                            <ul>
                                <li>
                                    <input type="checkbox" name="banners[]" value="ALPHA2_circulator_webbanner_300x250px_ENGLISH.jpg" />
                                    <img src="zip/img/icons/name.png" class="smallThumb banner" alt="thumbnail">
                                    <?php echo $name;?>_circulator_webbanner_300x250px_ENGLISH.jpg
                                </li>
                                <li>
                                    <input type="checkbox" name="banners[]" value="ALPHA2_circulator_webbanner_728x90px_ENGLISH.jpg" />
                                    <img src="zip/img/icons/name.png" class="smallThumb banner" alt="thumbnail">
                                    <?php echo $name;?>_circulator_webbanner_728x90px_ENGLISH.jpg
                                </li>
                            </ul>
                        </li>
                    </ul>

                      <br/>
                      <br/>
                      <br/>
                      <?php echo "<p>".$name ."</p>";   ?>
                      <input type="submit" name="createpdf" value="Download" />&nbsp;
                      <!--input type="reset" name="reset" value="Reset" /></td-->

                </form>
           </div>
    <script src="zip/js/checkBoxes"></script>
