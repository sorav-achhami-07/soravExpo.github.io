<?php 
// session_unset() function frees all sessions variable currently registered
session_start();
session_unset();
session_destroy();
Header("location:login.php");
exit;
?>