<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup 
 * --------------------------------------------------------------------
 */

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('User');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

//$routes->get('/', 'Home::index');
//$routes->get('/', 'User::index');
//$routes->get('document', 'Document::index');
//$routes->get('delete', 'User::delete'); 
$routes->add('lista_usuarios', 'User::lista_usuarios');
$routes->get('register', 'User::register');
$routes->add('login', 'User::login');

//alunos
$routes->add('lista_alunos', 'Alunos::lista_alunos');
//$routes->match(['get','post'],'register_aluno', 'Alunos::register_aluno', ['filter' => 'noauth']);
$routes->get('register_aluno', 'Alunos::register_aluno');

//$routes->get('/', 'Users::index', ['filter' => 'noauth']);
$routes->get('logout', 'Users::logout');
$routes->match(['get','post'],'register', 'Users::register', ['filter' => 'noauth']);
//$routes->match(['get','post'],'profile', 'Users::profile',['filter' => 'auth']);
$routes->get('dashboard', 'Dashboard::index',['filter' => 'auth']);

//$routes->resource('user');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
