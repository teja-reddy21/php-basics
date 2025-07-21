<?php
/* superglobals  are built in varibales that are aways available in all scops */

// $_SERVER -  conatains server side information
// $_GET - contains information about varibles passed thri=ough a URL or a form
// $_POST - contains information about form
// $_COOKIE - contains information about cookies
// $_FILES - contains information about files uploaded to thhe script

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>Host: <?php echo $_SERVER['HTTP_HOST']; ?></li>
        <li>Document Root: <?php echo $_SERVER['DOCUMENT_ROOT']; ?></li>
        <li>Server Name: <?php echo $_SERVER['SERVER_NAME'];?></li>
        <li>Server port: <?php echo $_SERVER['SERVER_PORT']; ?></li>
        <li>Server Software: <?php echo $_SERVER['SERVER_SOFTWARE']; ?></li> 
        <li>Request URI: <?php echo $_SERVER['REQUEST_URI']; ?></li>
        <li>Client Info: <?php echo $_SERVER['HTTP_USER_AGENT']; ?></li>
        <li>Remote Address: <?php echo $_SERVER['REMOTE_ADDR']; ?></li>
        <li>Current  File Dir: <?php echo $_SERVER['PHP_SELF']; ?></li>
    </ul>
</body>
</html>

