<?php
$site_main = trim($site_url,'/').'/'.($script_path ? trim($script_path,'/').'/': '');
$view_url = 'http://'.$site_main.($seo_firends ? '' : 'view.php?id=');
$images_url = 'http://'.($seo_firends ? 'i.' : '').$site_main.($seo_firends ? '' : 'images/');
$in_script = true;
?>
