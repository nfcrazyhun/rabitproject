<?php

/**
 * List of routes and the associated controller@method (Laravel styled routes)
 */
$router->get('', 'PagesController@home');
$router->get('users', 'PagesController@users');
$router->get('ads', 'PagesController@ads');
