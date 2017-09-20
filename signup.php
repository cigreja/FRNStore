<?php
include './includes/User.php';

// store user
$user = new User();
$user->setName($_POST['name']);
$user->setEmail($_POST['email']);
$user->setPassword($_POST['password']);
$_SESSION['users'][] = $user;
$_SESSION['current-cookie'] = $_POST['email'];
$_SESSION['current-user'] = $user;

// set cookie
$cookie_name = $_POST['email'];
$cookie_value = $_POST['email'];
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

header("Location: home.php"); /* Redirect to login */
?>

