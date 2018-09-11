<?php
  // Including the main configuration file
  include_once "system/config/config.php";
  $route = new Route;

  // ____________________________ THE ROUTES _________________________________

  $route->add("home", "papa.view.html");

  // _________________________________________________________________________

  // Here the page will be generated
  $page = $route->createPage(URL_PARAMS, URL);

  // including the right controller if set
  if(isset($page['controller']) && !empty($page['controller']))
  include_once ROOT."controllers/".$page['controller'];

  // including the right view and showing it if set
  if(isset($page['view']) && !empty($page['view'])){
    include_once ROOT."views/DOM/".$page['view'];
  }
?>
