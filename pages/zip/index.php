 <?php  
 $error = ""; //error holder  
 if(isset($_POST['createpdf']))  
 {  
      $post = $_POST;   
      $print_folder = "ALPHA2/Images/Print/"; // folder to load files  
      $web_folder = "ALPHA2/Images/Web/";
      $usp_folder = "ALPHA2/Unique Selling Points, USP/";
      $banner_folder = "ALPHA2/Webbanners/";
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
 <html>  
      <head>  
           <title>zip</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
      </head>  
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

          </style>
      <body>  
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
                            <img src="img/icons/name.png" class="smallThumb folder" alt="thumbnail">
                            Images
                            <ul>
                                <li class="subfolder">                            
                                    <input type="checkbox" class="img" id="allPrints" />
                                    <img src="img/icons/name.png" class="smallThumb" alt="thumbnail">
                                    Print
                                    <ul>
                                        <li>                                    
                                            <input type="checkbox" class="img" name="prints[]" value="ALPHA2_application_image.tiff" />
                                            <img src="img/icons/name.png" class="smallThumb" alt="thumbnail">
                                            ALPHA2_application_image.tiff
                                        </li>
                                        <li>                                    
                                            <input type="checkbox" class="img" name="prints[]" value="ALPHA2_left_product_image.tif" />
                                            <img src="img/icons/name.png" class="smallThumb" alt="thumbnail">
                                            ALPHA2_left_product_image.tif
                                        </li>
                                        <li>                                    
                                            <input type="checkbox" class="img" name="prints[]" value="ALPHA2_product_image_right.tiff" />
                                            <img src="img/icons/name.png" class="smallThumb" alt="thumbnail">
                                            ALPHA2_product_image_right.tiff
                                        </li>
                                        <li>                                    
                                            <input type="checkbox" class="img" id="bum" name="prints[]" value="ALPHA2_w_shells_right_product_image.tiff" />
                                            <img src="img/icons/name.png" class="smallThumb" alt="thumbnail">
                                            ALPHA2_w_shells_right_product_image.tiff
                                        </li>
                                    </ul>
                                </li>
                                <li class="subfolder">
                                    <input type="checkbox" class="img" id="allWebs" />
                                    <img src="img/icons/name.png" class="smallThumb" alt="thumbnail">
                                    Web
                                    <ul>
                                        <li>
                                            <input type="checkbox" class="img" name="webs[]" value="ALPHA2_application_image_1200x800px.jpg" />
                                            <img src="img/icons/name.png" class="smallThumb" alt="thumbnail">
                                            ALPHA2_application_image_1200x800px.jpg
                                        </li>
                                        <li>
                                            <input type="checkbox" class="img" name="webs[]" value="ALPHA2_application_image_1200x800px.png" />
                                            <img src="img/icons/name.png" class="smallThumb" alt="thumbnail">
                                            ALPHA2_application_image_1200x800px.png
                                        </li>
                                        <li>
                                            <input type="checkbox" class="img" name="webs[]" value="ALPHA2_product_image_62x62px.jpg" />
                                            <img src="img/icons/name.png" class="smallThumb" alt="thumbnail">
                                            ALPHA2_product_image_62x62px.jpg
                                        </li>
                                        <li>
                                            <input type="checkbox" class="img" name="webs[]" value="ALPHA2_product_image_62x62px.png" />
                                            <img src="img/icons/name.png" class="smallThumb" alt="thumbnail">
                                            ALPHA2_product_image_62x62px.png
                                        </li>
                                        <li>
                                            <input type="checkbox" class="img" name="webs[]" value="ALPHA2_product_image_1200x1200px.jpg" />
                                            <img src="img/icons/name.png" class="smallThumb" alt="thumbnail">
                                            ALPHA2_product_image_1200x1200px.jpg
                                        </li>
                                        <li>
                                            <input type="checkbox" class="img" name="webs[]" value="ALPHA2_product_image_1200x1200px.png" />
                                            <img src="img/icons/name.png" class="smallThumb" alt="thumbnail">
                                            ALPHA2_product_image_1200x1200px.png
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="folder">                            
                            <input type="checkbox" />
                            <img src="img/icons/name.png" class="smallThumb" alt="thumbnail">
                            Unique Selling Points / USP
                            <ul>
                                <li>                                    
                                    <input type="checkbox" id="bums" name="usps[]" value="ALPHA2_USPs.docx" />
                                    <img src="img/icons/name.png" class="smallThumb doc" alt="thumbnail">
                                    ALPHA2_USPs.docx
                                </li>
                            </ul>
                        </li>
                        <li class="folder">                            
                            <input type="checkbox" />
                            <img src="img/icons/name.png" class="smallThumb" alt="thumbnail">
                            Webbanners
                            <ul>
                                <li>                                    
                                    <input type="checkbox" name="banners[]" value="ALPHA2_circulator_webbanner_300x250px_ENGLISH.jpg" />
                                    <img src="img/icons/name.png" class="smallThumb banner" alt="thumbnail">
                                    ALPHA2_circulator_webbanner_300x250px_ENGLISH.jpg
                                </li>
                                <li>                                    
                                    <input type="checkbox" name="banners[]" value="ALPHA2_circulator_webbanner_728x90px_ENGLISH.jpg" />
                                    <img src="img/icons/name.png" class="smallThumb banner" alt="thumbnail">
                                    ALPHA2_circulator_webbanner_728x90px_ENGLISH.jpg
                                </li>
                            </ul>
                        </li>
                    </ul>
                      
                      <br />
                      <br /> 
                      <br />
                      <input type="submit" name="createpdf" value="Download as ZIP" />&nbsp;  
                      <input type="reset" name="reset" value="Reset" /></td>  
                         
                    
                </form>  
           </div>  
      </body>
      <script src="js/checkBoxes"></script>  
 </html>  