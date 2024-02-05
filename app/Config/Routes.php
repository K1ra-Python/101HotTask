<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'CommentController::index');
$routes->get('/sort_by_id_up', 'CommentController::sortByIdAsc');
$routes->get('/sort_by_id_down', 'CommentController::sortByIdDesc');
$routes->get('/sort_by_date_up', 'CommentController::sortByDateDesc');
$routes->get('/sort_by_date_down', 'CommentController::sortByDateAsc');
$routes->post('/addComment', 'CommentController::addComment');
$routes->get('/deleteComment/(:num)', 'CommentController::deleteComment/$1');


