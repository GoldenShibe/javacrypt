<?php
  function make(onclick){
    $file = fopen("key.txt", "a") or die("Unable to Download");
    $txt = code;
    fwrite($file, $txt."\n\n\r");
    fclose($file);
  }
?>
