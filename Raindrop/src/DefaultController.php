<?php

/**
 * @file Base Controller for loading default responses.
 * (So for example error responses and such.)
 */

namespace Raindrop\src;

use Raindrop\src\Controller;
use Raindrop;

class DefaultController extends Controller {

  function main() {
    include_once(ROOT . '/Raindrop/defaults/default.php');
  }

  function error() {
    Raindrop::view('/../Raindrop/defaults/404.php');
  }

  function noMethodSet() {
    $data = "You forgot to pass a method!";
    Raindrop::view('/../Raindrop/defaults/404.php', $data);
  }

  function noExistentMethod() {
    $data = "Method as passed \"{$this->response['controller']}\" does not exist!";
    Raindrop::view('/../Raindrop/defaults/404.php', $data);
  }

  function noControllerFound() {
    if($this->response['controller'] === "example:entry") {
      $data = "Oops! Did you forget to create an example controller? <br>
        Create one by using the following command: <br> 
        <p class=\"codeblock\" style=\"width: 90%; margin: 15px auto;\">php bin/console make:controller example</span>";
    } else {
      $data = "Controller \"{$this->response['controller']}\" does not exist";
    }
    Raindrop::view('/../Raindrop/defaults/404.php', $data);
  }

}
