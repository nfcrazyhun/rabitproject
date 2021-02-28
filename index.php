<?php

//bootstrap our application
require 'core/bootstrap.php'; //$app variable source




Router::load('app/routes.php')
    ->direct(Request::uri(), Request::method());