<?php
if(isset($in_script))
{
	exit('Not directly');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $site_name; ?></title>
	<link rel="stylesheet" type="text/css" href="/css/upload.css">
</head>
<body>
<div class="header">
	<ul id="navbar">
	    <li> <a href="index.php">Upload</a></li>
	    <li> <a href="faq.php">Faq</a></li>
	    <li> <a href="tc.php">Terms &amp; Conditions</a></li>
	    <li> <a href="contact.php">Contact</a></li>
</ul>
<div id="logo"><?php echo $site_name; ?></div>
</div>
<div id="main">
