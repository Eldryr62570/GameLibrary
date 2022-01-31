<?php


require dirname(__DIR__) . '../vendor/autoload.php';


// Afficher Erreur 

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

// Map routes 

$router = new AltoRouter();

$router->map('GET', '/', 'index', 'index');
$router->map('GET', '/jeux', 'jeux', 'jeux');
$router->map('GET', '/404', '404', '404');



// match routes 

$match = $router->match();

if( is_array($match['target'] ) ){

    if( is_callable( $match['target'] ) ) {
        call_user_func_array( $match['target'], $match['params'] ); 
    } else {
        $params = $match['params'];
        include "../app/views/{$params}.view.php";
	// no route was matched
    }

} else {
    include "../app/views/404.view.php";


