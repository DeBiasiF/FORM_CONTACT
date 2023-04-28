<?php
require_once "routes.php";

$request_uri = $_SERVER['REQUEST_URI'];

$request_uri = strtok($request_uri, '?');

foreach ($routes as $route => $file) {
    if ($request_uri == $route) {
        require_once($file);
        break;
    }
}
