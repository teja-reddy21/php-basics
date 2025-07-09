<?php

/* $_GET AND $_POST superglobals */

/* we can pass data through urls and forms using the $_GET and $_POST */

 
if(isset($_POST['submit'])){
    $username=filter_input(INPUT_POST,'username',FILTER_SANITIZE_SPECIAL_CHARS);
    
    
    $age=filter_input(INPUT_POST,'age', FILTER_SANITIZE_SPECIAL_CHARS);

    echo $name;
}
?>
<a href="<?php echo  $_SERVER['PHP_SELF']; ?>?
 name=teju & age=22">
 Click</a>

 <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
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