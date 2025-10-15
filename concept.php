<?php

// important tags for all videos
//  php, php tutorial, php shorts, php for beginners, php programming, web development, php interview, php session, php login, php vs javascript, php oops, php projects, php database


// Session in PHP

// Superglobal

/* Session stores temporary user data on the server-side, making it accessible
 on different pages visited by the same user during a single browsing session  */

// Data stored in $_SESSION persists until session ends.

session_start();
$_SESSION['user'] = "Coder";
echo $_SESSION['user'];


?>