<?php
define('ADMIN_EMAIL', 'admin');
define('ADMIN_PASSWORD', 'admin');
define('ERROR', true);
define('GITHUB_URL', 'https://hackergaucho.github.io/');
define('HELPER', __DIR__.'/helper/');
define('INC', __DIR__.'/inc/');
define("SITE_NAME", 'Hacker Gaucho');
define('SITE_URL', 'http://localhost/');
define('ROOT', __DIR__.'/');
require INC.'error.php';
$asset=require INC.'asset.php';
$isAuth=require HELPER.'isAuth.php';
