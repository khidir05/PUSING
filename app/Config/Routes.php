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
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

// Authentication Routes
$routes->get('/login', 'AuthController::login');
$routes->post('/auth/authenticate', 'AuthController::authenticate');
$routes->get('/auth/logout', 'AuthController::logout');

// Mahasiswa Routes
$routes->get('/mahasiswa', 'MahasiswaController::index');
$routes->post('/mahasiswa/submitPengajuan', 'MahasiswaController::submitPengajuan');
$routes->get('/mahasiswa/history', 'MahasiswaController::history');

// Staff Routes
$routes->get('/staff', 'StaffController::index');
$routes->get('/staff/manageMahasiswa', 'StaffController::manageMahasiswa');
$routes->get('/staff/manageStaff', 'StaffController::manageStaff');
$routes->put('/staff/approvePengajuan/(:num)', 'StaffController::approvePengajuan/$1');
$routes->put('/staff/declinePengajuan/(:num)', 'StaffController::declinePengajuan/$1');
$routes->get('/staff/pengajuan', 'StaffController::viewPengajuan');
$routes->get('/staff/allPengajuan', 'StaffController::viewAllPengajuan');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to set it up so that it is only available based on the environment.
 * One such example might be different routing based on whether you are
 * in a development or production environment.
 *
 * You can do that here.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}