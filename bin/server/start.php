<?php

/**
 * @File Script to start the development server on port 3000.
 */


// including local settings.
if(is_file(__DIR__ . "/../../config.php")) {
  include __DIR__ . "/../../config.php";
} else {
  define("SERVER_PORT", "8000");
}

// Strarting the dev server.
exec("php -S 0.0.0.0:". SERVER_PORT ." bin/server/router.php");