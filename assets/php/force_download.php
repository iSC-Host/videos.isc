<?php

/**
* Force File Download Dialog In Browser
*
* Force any file to download in a browser and secure location to full path of the file.
*
* for PHP versions 4 or newer
*
* @author     Suriyaa Kudo <SuriyaaKudoIsc@users.noreply.github.com> (https://bit.ly/Suriyaa)
* @copyright  2015-present Suriyaa Kudo
* @license    Copyright (c)
* @version    1.0
* @source     https://www.developphp.com/video/PHP/Force-File-Download-Dialog-In-Browser-Tutorial
*/

if(isset($_POST['file_name'])){
    $file = $_POST['file_name'];
    // Add a file type check here for security purposes so that nobody can-
    // download PHP files or other sensitive files from your server by spoofing this script
    header('Content-type: audio/mpeg3');
    header('Content-Disposition: attachment; filename="'.$file.'"');
    readfile('mystery_folder/'.$file);
    exit();
}
?>
