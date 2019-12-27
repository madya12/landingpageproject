<?php
/*
| -------------------------------------------------------------------------------
| Author            : G-Silvers
| Template Name     : G-Silvers V.3
| -------------------------------------------------------------------------------
*/

ob_start();
session_start();
error_reporting(E_ALL ^ E_NOTICE);

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

require_once __DIR__.'/app/server.php';