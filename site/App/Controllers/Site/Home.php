<?php

namespace App\Controllers\Site;

use App\Core\Controller;
use App\Core\View;

/**
 *  Construction
 */
class Home extends Controller
{
  protected function before()
  {
  }

  public function indexAction($args = array())
  {
    $viewPath = PATH_VIEW;
    $viewPath .= ucfirst($args['namespace']);
    $viewName = strtolower($args['controller']);


    echo ($viewPath . '<br /> ');


    echo ('in the home -> index action method <br>');

    View::render('f2', $viewPath, $viewName);
  }

  protected function after()
  {
  }

  //END-Class
}