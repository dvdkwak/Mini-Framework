<?php

/**
 * @file Base class for a Controller.
 */

namespace Raindrop\src;

class Controller {

  private $response;

  public function __construct($response) {
    $this->response = $response;
  }
}
