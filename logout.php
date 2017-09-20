
<?php
// set the expiration date to one hour ago
setcookie($_COOKIE[$_POST['cookie-id']], "", time() - 3600);
unset($_SESSION['current-cookie']);
unset($_SESSION['current-user']);

header("Location: home.php"); /* Redirect to login */
?>
