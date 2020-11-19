<?php
/**
 * Created by PhpStorm.
 * User: luis
 * Date: 08-21-16
 * Time: 02:38 PM
 */

namespace Develop\controller;
use Davis\views\Views;
use Davis\controller\DavisController;

class IndexController extends DavisController {

	/**
	 * @return mixed
	 */
  public function index() {
    return Views::go('welcome.davis');
  }

	/**
	 * @return mixed
	 */
  public function notFound() {
    return Views::go('error.404');
  }
}
