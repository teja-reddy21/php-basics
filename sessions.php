<?php
/* sessions are a way to store information to be used across multiple pages.
Unlike cookies, session are stored on the sever.
*/
session_start();

if(isset($_POST['submit'])){
    $username=filter_input(INPUT_POST,'username',FILTER_SANITIZE_SPECIAL_CHARS);
    
    $password=$_POST['password'];

    if($username == 'reddy' && $password == '325') {
        $_SESSION['username']=$username;
        header('Location: /php-crush/extras/dashboard.php');
    } else {
        echo 'Incorrect login';
    }   
}


?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <div>
        <label for='username'>UserName:</label>
        <input type='text' name='username'>
    </div>
     <div>
        <label for='password'>Password:</label>
        <input type='password' name='password'>
    </div>
    <input type="submit" value="Submit" name='submit'>
 </form>