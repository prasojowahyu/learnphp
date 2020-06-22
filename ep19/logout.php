<?php 
    session_start();                   //  \
    $_SESSION = [];                    //   \
    session_unset();                   //   / LOGOUT FROM SESSION||;
    session_destroy();                 //  /
    header( "Location: login.php" );   // /
?>