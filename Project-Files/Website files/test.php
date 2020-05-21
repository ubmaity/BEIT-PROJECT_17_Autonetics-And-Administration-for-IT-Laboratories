<?php
ini_set("auto_detect_line_endings", true);
ini_set("allow_url_fopen", true);
$string = file_get_contents("file:///D:/xampp/htdocs/file.txt");

    if($string === FALSE) {
         echo "Could not read the file.";
    } else {
         echo $string;
    }
?>