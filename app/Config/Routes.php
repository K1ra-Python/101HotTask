<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'CommentController::index');
$routes->get('/comment/addComment', 'CommentController::addComment');
$routes->get('/comment/deleteComment/(:num)', 'CommentController::deleteComment/$i');

