<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/open_account', 'Home::open_account');
$routes->post('/open_account', 'Home::open_account');
$routes->get('/login', 'Auth::login');
$routes->get('/signin', 'Auth::login');
$routes->get('/register', 'Home::open_account');
$routes->get('/signup', 'Home::open_account');
$routes->get('/webmail', 'Home::webmail');

$routes->get('datatable', 'Tables::index');
$routes->get('usertable', 'Tables::user');

$routes->get('admin', 'Admin::index');
$routes->get('admin/(:any)', 'Admin::$1');
$routes->post('admin/(:any)', 'Admin::$1');

$routes->get('auth', 'Auth::index');
$routes->get('auth/(:any)', 'Auth::$1');
$routes->post('auth/(:any)', 'Auth::$1');


$routes->get('user', 'User::index');
$routes->get('user/(:any)', 'User::$1');
$routes->post('user/(:any)', 'User::$1');

$routes->get('pages', 'Pages::index');
$routes->get('(:any)', 'Pages::view/$1');


// $routes->get('/', 'Pages::index');
// $routes->get('about', 'Pages::view/about');
$routes->get('otp-verification', 'Pages::otp_verification');
$routes->post('verify-otp', 'Pages::verify_otp');





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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
