<?php

$site_name		= 'mysite'; // site name displayed in the header and FAQ/ToS

$site_url		= 'mydomain.com'; // the domain ONLY for your site (i.e. without the "upld" folder)
$script_path	= 'upld'; // 

// admin username
$admin_username = 'admin';

// admin password and salt - use "pass.html" in the "misc" folder to generate these values
$admin_salt = '';
$admin_password = '';

// email for contact page
$contact_email = 'contact@mydomain.com'; // the email on the contact page
// email to get reports
$report_email = 'reports@mydomain.com'; // where emails should be sent if someone reports an image

// use domain.com/imageID and i.domain.com/imageID.ext instead of domain.com/view.php?id=imageID and domain.com/images/imageID.ext for shorter URLs?
// WARNING: ONLY enable this if you have configured your webserver to rewrite URLs - see README.txt
$friendly_urls	= false;

$db_server	= 'localhost';
$db_user	= 'user';
$db_pass	= 'password';
$db_name	= 'db';
$db_port	= 3306; // usually 3306 by default. If you don't know what this is, leave it alone and ask your hosting company if it doesn't work

// max size in bytes - remember that you might need to change this in your PHP config file too
$allowed_size = 2000000; // 1000 = 1 kilobyte, 1000000 = 1 megabyte

// allowed extensions - keep in mind this
$allowed_ext = [
	'png',
	'jpg',
	'gif',
	'bmp'
];
