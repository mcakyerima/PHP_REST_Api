<?php

declare(strict_types=1);

require './config/constants.php';

// enable strict type because we are using type declarations in our classes

// use spl_autoload_register function to only load class when they are required in our program
spl_autoload_register(function ($class) {
    require __DIR__ . "/source/$class.php";
});

// call our set_exception_handler function to handle exception and pass in our custom class
// as a string paramter for custom error handling
set_exception_handler("ErrorHandler::handleException");

header("content-type: application/json; charset=UTF-8");

// explode the request uri with '/' which will return all the uri parts
$parts = explode('/', $_SERVER['REQUEST_URI']);
// print_r($parts);

if ($parts[2] != 'products') {
    http_response_code(404);
    exit();
}

$id = $parts[3] ?? null;

// create an index of our db class

$database = new Database(DB_HOST, DB_NAME, DB_USER, DB_PASS);
$database->getConnection();


$controller = new ProductController;

$controller->processRequest($_SERVER['REQUEST_METHOD'], $id);
