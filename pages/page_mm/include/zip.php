<?php
//THIS IS AN ERROR COMMENTED OUT!!!! $name = $_GET['dataT'];
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
         $error .= "* Please select file to zip ";
    }
}
else
{
    $error .= "* You dont have ZIP extension";
}
}
?>
