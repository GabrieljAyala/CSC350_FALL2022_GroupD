
<?php
session_start();
//Added unset, the session variables such as login, unitID and password stays the same
//Even if it was destroyed 
session_unset();

session_destroy();
// Redirects to the login page:
//Change it to login.php
header('Location: Login.php');
?>