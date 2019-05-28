<?php 

use App\Core\Router;
use App\Core\Request;

require('vendor/autoload.php');

require('Core/bootstrap.php');

require ('helpers/functions.php');

 Router::load('App/routes.php')
			->direct(Request::uri(), Request::method());
