<?php
use \Davis\http\thunder\route\router\Routing;
use \Davis\views\Views;

/**
 * Route with controller.
 */
Routing::get('/', 'IndexController@index');
Routing::get('/404', 'IndexController@notFound');

/**
 * Route parametter.
 * @params id
 */
Routing::get('/davis/{id}', function ($id) {
	echo $id;
});
