 <?php  
 $error = ""; //error holder  
 if(isset($_POST['createpdf']))  
 {  
      $post = $_POST;   
      $file_folder = "files/"; // folder to load files  
      $document_folder = "documents/";
      if(extension_loaded('zip'))  
      {   
           // Checking ZIP extension is available  
           if(isset($post['files']) and count($post['files']) > 0)  
           {   
                // Checking files are selected  
                $zip = new ZipArchive(); // Load zip library   
                $zip_name = time().".zip";           // Zip name  
                if($zip->open($zip_name, ZIPARCHIVE::CREATE)!==TRUE)  
                {   
                     // Opening zip file to load files  
                     $error .= "* Sorry ZIP creation failed at this time";  
                }  
                foreach($post['files'] as $file)  
                {   
                     $zip->addFile($file_folder.$file); // Adding files into zip  
                }  
                $zip->close();  
            }
//break
            if(isset($post['documents']) and count($post['documents']) > 0)  
            {   
                // Checking documents are selected  
                $zip = new ZipArchive(); // Load zip library   
                $zip_name = time().".zip";           // Zip name  
                if($zip->open($zip_name, ZIPARCHIVE::CREATE)!==TRUE)  
                {   
                     // Opening zip document to load documents  
                     $error .= "* Sorry ZIP creation failed at this time";  
                }  
                foreach($post['documents'] as $document)  {
                     $zip->addFile($document_folder.$document); // Adding files into zip  
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
           <title>Webslesson Tutorial</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
      </head>  
          <style>
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
                    <ul class="fileBrowser">
                        <li>                            
                            <input type="checkbox" class="folder" id="allFiles" />
                            <img src="img/icons/name.png" class="smallThumb" alt="thumbnail">
                            Images
                            <ul>
                                <li>                                    
                                    <input type="checkbox" class="img" name="files[]" value="image1.png" />
                                    <img src="img/icons/name.png" class="smallThumb" alt="thumbnail">
                                    img1.png
                                </li>
                                <li>                                    
                                    <input type="checkbox" class="img" name="files[]" value="image2.jpg" />
                                    <img src="img/icons/name.png" class="smallThumb" alt="thumbnail">
                                    img2.jpg
                                </li>
                                <li>                                    
                                    <input type="checkbox" class="img" name="files[]" value="image3.jpg" />
                                    <img src="img/icons/name.png" class="smallThumb" alt="thumbnail">
                                    img3.jpg
                                </li>
                                <li>                                    
                                    <input type="checkbox" class="img" id="bum" name="files[]" value="image4.jpg" />
                                    <img src="img/icons/name.png" class="smallThumb" alt="thumbnail">
                                    img4.jpg
                                </li>
                            </ul>
                        </li>
                        <li>                            
                            <input type="checkbox" />
                            <img src="img/icons/name.png" class="smallThumb" alt="thumbnail">
                            Documents
                            <ul>
                                <li>                                    
                                    <input type="checkbox" name="documents[]" value="mdu.pdf" />
                                    <img src="img/icons/name.png" class="smallThumb" alt="thumbnail">
                                    mdu.pdf
                                </li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                        </li>
                      
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





                      <!--table class="table table-bordered">  
                          <tr>  
                               <th>*</th>  
                               <th>File Name</th>
                          </tr>  
                          <tr>  
                               <td><input type="checkbox" name="files[]" value="image1.png" /></td>  
                               <td>imag</td>  
                          </tr>  
                          <tr>  
                               <td><input type="checkbox" name="files[]" value="image2.jpg" /></td>  
                               <td>image2.jpg</td>  
                          </tr>  
                          <tr>  
                               <td><input type="checkbox" name="files[]" value="image3.jpg" /></td>  
                               <td>image3.jpg</td>  
                          </tr>  
                          <tr>  
                               <td><input type="checkbox" name="files[]" value="image4.jpg" /></td>  
                               <td>image4.jpg</td>  
                          </tr>  
                          <tr>  
                           <tr>  
                               <td><input type="checkbox" name="documents[]" value="mdu.pdf" /></td>  
                               <td>mdu.pdf</td>  
                          </tr> 
                               <td colspan="2"><input type="submit" name="createpdf" value="Download as ZIP" />&nbsp;  
                               <input type="reset" name="reset" value="Reset" /></td>  
                          </tr>  
                     </table> 