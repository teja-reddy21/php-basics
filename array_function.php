<?php

/* functions
   in function we run the function throw d=function call
*/
$y=30;
$email='teju@gmail.com';
 function registeruser($email){
  
//   echo $email. '<br>' .'user successfully registerd';
}

//  registeruser($email);

function sum($n1=5,$n2=5){
  return $n1 + $n2;
}
$number =sum();
// echo $number;

 $subtract=function($n1,$n2){
  return $n1 - $n2;
 };
//  echo $subtract(10,5);

/* arrow function */
$add=fn($n1,$n2)=>$n1 + $n2;
// echo $add(10,10);

/* array functions */
// get length
 $fruits=['apple','mango','orange'];
//  echo count($fruits);

 //search array

//  var_dump(in_array('apple',$fruits));

 // add array method one 
 $fruits[]='banana';
 // add in last 
 array_push($fruits,"grapes");
 // add in first
 array_unshift($fruits,'pear');

 //  remove array
array_pop($fruits); // remove the last element
array_shift($fruits); // remove the first element
// unset($fruits[2]);// remove sphecific element
//  print_r($fruits);

 // Split into 2 chunks
 $chunked_array=array_chunk($fruits,2);
//  print_r($chunked_array);

// merge arrays
$arr1=[1,2,3,4];
$arr2=[5,6,7,8];
$arr3= array_merge($arr1,$arr2);
$arr4=[...$arr2]; //spread operator
// print_r($arr4);

$a=['green','red','yellow'];
$b=['avacado','apple','banana'];
$c=array_combine($a,$b);
// print_r($c);

$keys=array_keys($c);
// print_r($keys);

$flipped=array_flip($c);
// print_r($flipped);

//ranges

$number=range(1,10);
// print_r($number);

$newNumber=array_map(function($number){
 return 'Number ${number}';
},$number);
// print_r($newNumber);


?>