<?php
 
 /* File handing is the ability to read and write files on the server.
 PHP has built in function  for reading and writing files.
 */

$file='extras/users.txt';

if(file_exists($file)){
//    echo readfile($file); 
$handle=fopen($file, 'r');
$contents=fread($handle,filesize($file));
fclose($handle);
echo $contents;
}

?>