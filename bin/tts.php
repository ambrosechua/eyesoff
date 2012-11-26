<?php
   $qstr = substr($_GET['q'], 0, 100);
   $qstr = urlencode($qstr);
   $file  = md5($qstr);
   $file = "audio/".$file.".mp3";
   if (!file_exists($file)) {
     $mp3 = file_get_contents('http://translate.google.com/translate_tts?tl=en&q='.$qstr);
     file_put_contents($file, $mp3);
   }
   echo $file;
?>