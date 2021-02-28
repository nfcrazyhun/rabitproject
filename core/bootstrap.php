<?php

//init Dependency injection Container
require_once 'core/App.php';

//init models
require_once 'app/models/Ad.php';
require_once 'app/models/User.php';

//init database connection
require_once 'core/database/Connection.php';
require_once 'core/database/QueryBuilder.php';

//init router
require_once ('core/Router.php');
require_once ('core/Request.php');
require_once ('app/controllers/PagesController.php');

// toDo: psr-4 autoloading?

/* Super Simple | Dependency injection Container */
App::bind('database', new QueryBuilder(
        Connection::make()
    )
);