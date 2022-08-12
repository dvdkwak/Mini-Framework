<?php

/**
 * SYSTEM FILE, DONT TOUCH THIS!
 */

// Including the main configuration file
include_once "Raindrop/config/config.php";
$route = new Raindrop\src\Route;

// including all routes
include_once ROOT . "routes.php";

// Here the response will be generated
$response = $route->response(URL_PARAMS, URL);

// New way of handling the response.
Raindrop::handleResponse($response);
