<?php

$router->get('','PagesController@home');
$router->get('about','PagesController@about');
$router->get('contact','PagesController@contact');
$router->get('events','EventsController@index');
$router->post('add-event','EventsController@store');

