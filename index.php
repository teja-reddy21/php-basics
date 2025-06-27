<?php
// echo "hello";
// var_dump(true);

$name='teja';
$age=22;
$has_kids= true;
// echo $name;
// echo $age;
// var_dump($has_kids);
// echo $name . ' is ' . $age . " years old ";
// echo "$name is $age years old with kids $has_kids ";
// echo '5' - '5';
// $x="5" + "4";
// var_dump($x);

//simplet array
$number=[1,45,67,31];
// print_r($number);
$fruits=array('apple','orange','pear');
// echo $fruits[0];

//associative array

$colors= [
  1=>'red',
  4=>'blue',
  6=>'green'
];
// echo $colors[4];

$hex=[
  'red'=>'#f00',
  'blue'=>'#0f0',
  'green'=>'#00f'
];
// echo $hex['blue'];

$person=[
  'first_name'=>'teju',
  'last_name'=>'nimmanapalli'
];
// echo $person['first_name'];
$peple=[
  [
  'first_name'=>'jyo',
  'last_name'=>'sanapu'
],
[
  'first_name'=>'lari',
  'last_name'=>'batala'
]
];
echo $peple[0]['last_name'];
?>