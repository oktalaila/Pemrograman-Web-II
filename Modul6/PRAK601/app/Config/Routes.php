<?php
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'ProfilController::beranda');
$routes->get('/profil', 'ProfilController::profil');