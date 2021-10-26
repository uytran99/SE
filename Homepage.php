<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
       <?php 
       if (isset($_SESSION['username']) && $_SESSION['username']){
           echo 'You are logged in as '.$_SESSION['username']."<br/>";
           echo 'Click here to <a href="logout.php">Logout</a>';
       }
       else{
           echo 'You are not loggin';
       }
       ?>
    </body>
</html>