<?php
session_start();

$_SESSION = array();

session_destroy();

header("Location: /SDC345_L_Project/login.php");
exit();
?>