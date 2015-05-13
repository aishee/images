<?php
$time = microtime(true);
session_start();

require('conf.php');
require('common.php');
require('/inc/header.php');
if($admin_user === '') || ($admin_password === '')
{
	$message = "Login not allowed, please set login details in conf file";
	require('/inc/message.php');
	require('/inc/footer.php');
	exit;
} 
if(isset($_POST['username']) && isset($_POST['password']))
{
	if (($_POST['username'] == $admin_user) && ($_POST['password'] == $admin_password)) {
		$_SESSION['admin'] = true;
		$message = "Login successful, welcome to $admin_user";
		require('/inc/message.php');
		require('/inc/footer.php');
		exit;

	}
}
require('/inc/login.php');
require('/inc/footer.php');
