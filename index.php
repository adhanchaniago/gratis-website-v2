<?php

$pathname = preg_replace('/^\/+|\/+$/', '', $_SERVER['REQUEST_URI']);
$path = strstr($pathname, '/') ? explode('/', $pathname) : $pathname;
$action = is_array($path) ? $path[count($path) - 1] : $path;
$file = dirname(__FILE__).'/'.$action.'.php';

if (file_exists($file)) {
    include $file;
} else {
    include 'home.php';
}
