<?php
session_start();
if(!$_SESSION['email']) {
	header('Location: login_crud.php');
	exit();
}
?>