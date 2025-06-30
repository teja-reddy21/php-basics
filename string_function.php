<?php
$string='hello world';
// echo $string;

//get the length of the string
echo strlen($string),"<br>";

//find the position of the first occurrence
echo strpos($string,'o'),'<br>';

//find the position of the last occurrence
echo strrpos($string,'o'),'<br>';

//reverse a string
echo strrev($string),'<br>';

//convert all characters into lowercase
echo strtolower($string),'<br>';

//convert all characters into uppercase
echo strtoupper($string),'<br>';

// string replace
echo str_replace('world','everyone',$string),"<br>";

//starts with
if(str_starts_with($string,'hello')){
    echo 'Yes','<br>';
}

//ends with
if(str_ends_with($string,'id')){
    echo "yes";
}else{
    echo 'No','<br>';
}

printf('%s like to %s', 'teja','code');
?>