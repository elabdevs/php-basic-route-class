<?php 
include("./vendor/autoload.php");

use Routes\Route;

// Include the classes
use Controllers\TestController;

// The value entered in the class will be the first directory of the project
$route = new Route('/project');

// GET Method
$route->get('/', function () {
    echo "Homepage";
});
// Using a class
$route->get('/test', [TestController::class, 'testFunction']);

// Using a class (send variable)
$route->get('/test/{id}', [TestController::class, 'testFunctionID']);

// Group method
Route::group('/api/v1', function ($router){
    // GET Method
    $router->get('/getUsers', function (){
        header("Content-type: Application/json");
        echo json_encode([
            'status' => true,
            'message' => 'API Services Online',
            'method' => $_SERVER['REQUEST_METHOD'],
        ], JSON_PRETTY_PRINT);
    });
    // POST Method
    $router->post('/getUsers', function (){
        header("Content-type: Application/json");
        echo json_encode([
            'status' => true,
            'message' => 'API Services Online',
            'method' => $_SERVER['REQUEST_METHOD'],
        ], JSON_PRETTY_PRINT);
    });
});

Route::dispatch($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);