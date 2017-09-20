<?php
include './includes/User.php';

// find user




// store user
$user = new User();
$user->setName($_POST['inputName']);
$user->setEmail($_POST['inputEmail']);
$user->setPassword($_POST['inputPassword']);
$_SESSION['users'][] = $user;
$_SESSION['current-cookie'] = $_POST['inputEmail'];
$_SESSION['current-user'] = $user;

// set cookie
$cookie_name = $_POST['inputEmail'];
$cookie_value = $_POST['inputEmail'];
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

header("Location: home.php"); /* Redirect to login */
?>
