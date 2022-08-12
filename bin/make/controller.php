<?php

/**
 * This function will generate a controller with a passed name.
 */
function makeController($argv) {
  if(count($argv) <= 2) {
    echo "No controller name has been given...\n";
    exit();
  }
  if($argv[2] == "example") { // Creation of the example controller.
    $controllerName = ucfirst($argv[2]);
    $filename = ucfirst($argv[2]) . 'Controller';
    if(!file_exists(__DIR__ . "/../../controller/{$filename}.php")) {
      $controller = fopen(__DIR__ . "/../../controller/{$filename}.php", "w");
      $content = "<?php\n\n";
      $content .= "namespace Controller;\n\n";
      $content .= "use Raindrop\src\Controller;\n";
      $content .= "use Raindrop;\n\n";
      $content .= "class {$controllerName}Controller extends Controller {\n\n";
      $content .= "  public function entry() {\n";
      $content .= "    Raindrop::view('example.php');\n";
      $content .= "  }\n\n";
      $content .= "}\n";
      fwrite($controller, $content);
      fclose($controller);
    } else {
      echo "This controller already seems to exist... \n";
    }
  } else {
    $controllerName = ucfirst($argv[2]);
    $filename = ucfirst($argv[2]) . 'Controller';
    if(!file_exists(__DIR__ . "/../../controller/{$filename}.php")) {
      $controller = fopen(__DIR__ . "/../../controller/{$filename}.php", "w");
      $content = "<?php\n\n";
      $content .= "namespace Controller;\n\n";
      $content .= "use Raindrop\src\Controller;\n\n";
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
}
