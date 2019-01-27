<?php 
session_start();
session_unset($_SESSION['login_user']='');
session_destroy();
include('session.php');
?>