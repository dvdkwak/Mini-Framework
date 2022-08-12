<?php

// Needed for unit testing scripts.
include_once __DIR__ . '/../config.php';

/**
 * @file autoloader to load all classes, mind your namespaces! :D
 */

// Autoloading all classes.
function autoloadRaindrop($class) {
  $path = __DIR__ . '\\..\\' . $class . '.php';
  $path = str_replace('\\', '/', $path);
  if(file_exists($path)) {
    include($path);
  }
}

spl_autoload_register('autoloadRaindrop');
