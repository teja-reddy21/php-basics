<?php

/* $_GET AND $_POST superglobals */

/* we can pass data through urls and forms using the $_GET and $_POST */
 echo $_GET['name'];
 echo $_GET['age'];
?>
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?
 name=teju & age=22">
 Click</a>

 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
    <div>
        <label for='name'>Name:</label>
        <input type='text' name='name'>
    </div>
     <div>
        <label for='age'>Age:</label>
        <input type='text' name='age'>
    </div>
    <input type="submit" value="Submit" name='submit'>
 </form>