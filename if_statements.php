<?php
 /* if statements syntax
  if (condition){
  // code to be executed if conditon is true
  }
  */

  $marks=10;
  if ($marks >=20){
    // echo 'you are pass';
  }else{
    // echo 'sorry you are fail';
  }

  $d=date("F j"); // for current data 
  // echo $d;
  $t=date("H");
  if ($t<12){
    // echo 'good morning';
  }elseif($t<17){
    // echo 'good afternoon';
  }else {
    // echo 'good evening';
  }
  // echo $t;
  
  $posts = ['first post'];
   
  if(!empty($posts)){
    // echo $posts[0];
  }else{
    // echo 'no posts';
  }
  // echo !empty($posts) ? $posts[0] : 'no post';
  
  $firstPost= !empty($posts) ? $posts[0] : "no posts";
  // echo $firstPost;
  ?>