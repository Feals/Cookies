<?php session_start(); ?>
<?php require 'inc/head.php'; 
function logout() {
session_destroy();
header('Location: /');
exit;
}

logout();