<?php

$file = fopen("text.txt","w") or die("Unable to open file!");
fwrite($file,"Hello World. Testing!");
fclose($file);


 
  
  ?>