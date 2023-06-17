<?php
session_start();

unset($_SESSION['username']);
unset($_SESSION['id']);
unset($_SESSION['level']);

header('location: login.php')
?>