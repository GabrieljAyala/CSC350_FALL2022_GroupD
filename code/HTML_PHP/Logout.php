
<?php
session_start();
//Added unset, the session variables such as login, unitID and password stays the same
//Even if it was destroyed 
unset($_SESSION['loggedin'],$_SESSION['id'] );


// Redirects to the login page:
//Change it to login.php
header('Location: index.php');
?>