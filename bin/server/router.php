<?php

/**
 * @File Router script used for the development server.
 */

// including local settings.
if(is_file(__DIR__ . "/../../config.php")) {
  include __DIR__ . "/../../config.php";
} else {
  define("PUBLIC_DIR", "public");
}

// Setting the entire url to the GET parameter of url.
$_GET['url'] = ltrim($_SERVER['REQUEST_URI'], '/');

// Splitting the uri in parameters to test wether something is from the public folder.
$params = explode('/', $_SERVER['REQUEST_URI']);
array_splice($params, 0, 1);

// Serve of static public folder.
if($params[0] === PUBLIC_DIR && is_file($_SERVER['DOCUMENT_ROOT'] . $_SERVER['REQUEST_URI'])) {
  return false;
}

// Let the application always start on index.php.
include "index.php";
