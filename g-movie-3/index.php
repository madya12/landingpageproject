<?php
/*
| -------------------------------------------------------------------------------
| Author            : G-silvers
| Template Name     : G12
| -------------------------------------------------------------------------------
*/

ob_start();
session_start();
error_reporting(E_ALL ^ E_NOTICE);

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

require_once __DIR__.'/app/server.php';