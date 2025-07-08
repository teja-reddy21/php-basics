<?php



/* loops
  ** for loop syntax
  for (initailize; condition; increment){
   // code to be executed
  }
*/
 for ($y =0; $y<= 10; $y++){
  // echo $y;
  // echo 'Number' . $y . '<br>';
 }

  /* while loop syntax
     while(condition){
     //code to be executed
     }
     */
    $x=1;
    while($x<=15){
      // echo 'Number' . $x . '<br>';
      $x++;
    }

    /*  do while loop syntax
    do{
    //code 
    } while(condition);
    */
$z=6;
    do{
      // echo $z . '<br>';
      $z++;
    }while($z<=5);

    /* foreach loop syntax
     foreach ($array as $value){
     // code
     }
     */
 $photo=['first photo', 'second photo','third photo'];
    //  foreach($photo as $img){
    //   // echo $img;
    //  }
foreach($photo as $index => $photo){
  // echo $index + 1 . '-' . $photo . '<br>';
}

?>