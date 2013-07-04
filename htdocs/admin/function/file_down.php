<?php
/*
 * Created on 2011-4-21
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

 error_reporting("0");
$mime_types = array(
               'gif' => 'image/gif',
               'jpg' => 'image/jpeg',
               'jpeg' => 'image/jpeg',
               'jpe' => 'image/jpeg',
               'bmp' => 'image/bmp',
               'png' => 'image/png',
               'tif' => 'image/tiff',
               'tiff' => 'image/tiff',
               'pict' => 'image/x-pict',
               'pic' => 'image/x-pict',
               'pct' => 'image/x-pict',
               'tif' => 'image/tiff',
               'tiff' => 'image/tiff',
               'psd' => 'image/x-photoshop'

                );

//$_GET[path]="dXBsb2FkL3Jlc291cmNlLzEzMDMzMDg4ODkuanBn";


    $file_name='../../'.base64_decode(str_replace(" ","+",$_GET[path]));
    $pinfo=pathinfo($file_name);
    $ftype=$pinfo['extension'];


if(isset($_GET[path])){


    $file_name='../../'.base64_decode(str_replace(" ","+",$_GET[path]));
    $pinfo=pathinfo($file_name);
    $ftype=$pinfo['extension'];

    if (!file_exists($file_name)) { //To  ensure  the  file  is  exsist

          echo "文件未找到";
          exit;

          } else {

             //To  get  the mine-type  of  the  file

            $fileExt = substr(strrchr($file_name,'.'), 1);
            $Mime_Type =($ftype=$mime_types[$fileExt])?$mime_types[$fileExt]:'application/octet-stream';


            $file = fopen($file_name,"r"); // Open the file
            Header("Content-type: $Mime_Type");
            Header("Accept-Ranges: bytes");
            Header("Accept-Length: ".filesize($file_name));
            Header("Content-Disposition: attachment; filename=" . $pinfo['basename']);


            // Output  the  file

            echo fread($file,filesize($file_name));
            fclose($file);
            exit;
            }


}




?>
