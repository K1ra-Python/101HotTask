<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'CommentController::index');
$routes->post('/addComment', 'CommentController::addComment');
$routes->get('/deleteComment/(:num)', 'CommentController::deleteComment/$1');


