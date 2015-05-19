<?php

$start = microtime(true);

session_start();

require('conf.php');
require('common.php');
require('inc/header.php');

if (!ctype_alnum($_GET['id']) || (strlen($_GET['id']) !== 5))
{
	$message = 'Oops, that ID appears to be invalid. IDs should have 5 characters and contain letters and numbers only.';
	require('inc/message.php');
	require('inc/footer.php');
	exit;
}

require('db.php');

$image_query = mysqli_query($db, 'SELECT `ext`' . (isset($_SESSION['admin']) ? ', `time`, `ip`' : '') . ', `removed` FROM `images` WHERE `id` = "' . $_GET['id'] . '"');
++$db_queries;

if (mysqli_num_rows($image_query) === 0)
{
	$message = 'Hmm, no image exists with that ID. Maybe it was deleted or you typed in the URL incorrectly? IDs should have 5 characters and contain letters and numbers only.';
	require('inc/message.php');
	require('inc/footer.php');
	exit;
}

$image = mysqli_fetch_assoc($image_query);

mysqli_free_result($image_query);

if ($image['removed'] === '0')
{
	$dimensions = getimagesize('images/' . $_GET['id'] . '.' . $image['ext']);
	$size = (filesize('images/' . $_GET['id'] . '.' . $image['ext']) / 1024);

	require('inc/view.php');
}
else
{
	$message = 'This image has been removed for breaking our terms & conditions';
	require('inc/message.php');
}

require('inc/footer.php');
