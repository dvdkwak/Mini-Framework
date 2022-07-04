<?php

/**
 * This function will generate a controller with a passed name.
 */
function makeController($argv) {
  if(count($argv) <= 2) {
    echo "No controller name has been given...\n";
    exit();
  }
  $controllerName = ucfirst($argv[2]);
  $filename = $argv[2];
  if(!file_exists(__DIR__ . "/../../controllers/{$filename}.php")) {
    $controller = fopen(__DIR__ . "/../../controllers/{$filename}.php", "w");
    $content = "<?php\n\n";
    $content .= "use Raindrop\Controller;\n\n";
    $content .= "class {$controllerName}Controller extends Controller {\n\n";
    $content .= "  public function entry() {\n";
    $content .= "    echo \"Hello World!\";\n";
    $content .= "  }\n\n";
    $content .= "}\n";
    fwrite($controller, $content);
    fclose($controller);
  } else {
    echo "This controller already seems to exist... \n";
  }
}
