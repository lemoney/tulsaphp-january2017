<?php
/**
 * Created By: https://www.github.com/lemoney
 * Project: lemoney-php
 * License: Apache 2.0
 */
declare(strict_types = 1);
/*
 * Setup the autoloader (Both the Framework and your application use it)
 */
require "../src/vendor/autoload.php";

/*
 * Establish Global Path Definition
 */
require "../conf/path.php";

/*
 * Setup the session
 */
require "../conf/session.php";

/*
 * Start the session
 */
session_start();

/*
 * Initiate the request response
 */
\Lemoney\Services\Middleware\Router::EntryPoint();