<?php

use App\Core\App;
use App\Core\Database\Connection;
use App\Core\Database\QueryBuilder;

App::bind('config', require('config.php'));  //fetch configurations 

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));


function view($name, $data = [])
{
    extract($data);

    require("App/views/{$name}.view.php");

}

function redirect($path)
{
    return header("Location: /{$path}");
}