<?php

namespace Raindrop\Default;

use Raindrop\Controller;
use Raindrop;

class DefaultController extends Controller {

  function main() {
    include_once(ROOT . '/system/defaults/default.php');
  }

  function error() {
    Raindrop::view('/../system/defaults/404.php');
  }

  function noMethodSet() {
    $data = "You forgot to pass a method!";
    Raindrop::view('/../system/defaults/404.php', $data);
  }

  function noExistentMethod() {
    $data = "Method as passed \"{$this->response['controller']}\" does not exist!";
    Raindrop::view('/../system/defaults/404.php', $data);
  }

  function noControllerFound() {
    $data = "Controller \"{$this->response['controller']}\" does not exist";
    Raindrop::view('/../system/defaults/404.php', $data);
  }

}
