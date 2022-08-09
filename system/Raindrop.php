<?php

use Raindrop\Default\DefaultController;

class Raindrop {

  /**
   * This method handles the response and translates it to a server response.
   */
  public static function handleResponse($response = False) {
    if(!$response) {
      return False;
    }
    if(!self::controller($response, $response['controller'])) {
      $defaultController = new DefaultController($response);
      $explodedController = explode(":", $response['controller']);
      // Check wether the controller exists.
      if($explodedController[0] !== "default" && !file_exists(ROOT . "controllers/" . $explodedController[0] . ".php")) {
        $method = 'noControllerFound';
      } else {
        // check wether a method was passed.
        if(count($explodedController) <= 1) {
          $method = 'noMethodSet';
        } else {
          $method = $explodedController[1];
        }
        // check wether the method exists.
        if(!method_exists($defaultController, $method)) {
          $method = 'noExistentMethod';
        }
      }
      $defaultController->$method();
    }
  }

  /**
   * This function will return a link which can be used to get items from the public folder
   * @param $link string This is the link where the system will reffer to when loading assets (images etc)
   * @return string
   */
  public static function public($link) {
    // check the value of DIRECTORY, if this has no value, remove all the "/" before
    if(DIRECTORY === "/" || empty(DIRECTORY)) {
      $link = "/" . PUBLIC_DIR . "/" . $link;
    } else {
      $link = "/" . DIRECTORY . "/" . PUBLIC_DIR . "/" . $link;
    }
    return $link;
  }


  /**
   * This function will return a link which can be used to get items from the views folder
   * @param link[string] This is the link where the system will reffer to when loading a view (images etc)
   * @param linkOnly[boolean] This determines wether a link should be returned or if a file should be included
   * @return string
   */
  public static function view($link, $data = False, $linkOnly = False) {
    $link = ROOT . "views/" . $link;
    if($linkOnly) {
      return $link;
    }
    if(!$data) {
      unset($data);
    }
    include_once $link;
  }


  /**
   * This function will return a link which can be used to get items from the controllers folder
   * @param $link string This is the link where the system will reffer to when loading assets (images etc)
   * @return string
   */
  public static function controller($response, $controllerName = False, $linkOnly = False) {
    if(!$controllerName) {
      return False;
    }
    $explodedController = explode(":", $controllerName);
    $controllerName = $explodedController[0];
    if($controllerName === "default") {
      return False;
    } else {
      $controllerPath = ROOT . "controllers/" . $controllerName . ".php";
    }
    // Including the controller and calling the given method.
    if(!file_exists($controllerPath)) {
      return False;
    }
    // When only a link is needed we just return it.
    if($linkOnly) {
      return $controllerPath;
    }
    include_once $controllerPath;
    $controllerName = ucfirst($controllerName) . "Controller";
    $controller = new $controllerName($response);
    if(count($explodedController) > 1) {
      $method = $explodedController[1];
      // check if the passed method exists
      if(!method_exists($controller, $method)) {
        return False;
      }
      $controller->$method();
      return True;
    }
    return False;
  }

}
