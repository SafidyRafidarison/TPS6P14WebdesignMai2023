<?php 
 
     function urlPrint($url)
 {
     $new_string = str_replace(" ", "-", $url);
     return $new_string;
 } //manampy ao @composer cmd composer dump-autoload
?>