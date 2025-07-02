<?php
/* cookies are a mechanism for storing data in the remote browser and thus tracking or identifying return users.
you can set specific data to be stored in the browser , and then retrive it wwhen the user visits the site again.
*/
// set cookie

setcookie('name','teja',time() + 86400 *30);

if(isset($_COOKIE['name'])){
    echo $_COOKIE['name'];
}

setcookie('name','',time() - 86400);




?>
