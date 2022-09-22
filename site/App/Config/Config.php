<?php

namespace App\Config;

class Config
{
  private $routes = array();


  public function __construct()
  {
  }


  public function setRoutes()
  {
    $this->routes = include_once('routes.php');
  }
  public function getRoutes()
  {
    return $this->routes;
  }







  //END-Class
}
