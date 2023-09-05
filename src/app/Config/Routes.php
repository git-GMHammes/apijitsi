<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
// $routes->get('/', 'Home::index');
$routes->addRedirect('/', 'meet/jitsi/endpoint/main');
#
// $routes->get('__', 'Controller::__');
// $routes->get('__/(:segment)', 'Controller::__/$1');
// $routes->get('__/(:any)', 'Controller::__/$1');
// $routes->post('__', 'Controller::__');
// $routes->post('__/(:segment)', 'Controller::__/$1');
// $routes->post('__/(:any)', 'Controller::__/$1');
#
# /www/meet/(:any)
$routes->addRedirect('/meet', 'meet/jitsi/endpoint/main');
$routes->group('meet', function ($routes) {
    # /www/meet/jitsi/(:any)
    $routes->addRedirect('/meet/jitsi', 'meet/jitsi/endpoint/main');
    $routes->group('jitsi', function ($routes) {
        # /www/meet/jitsi/api/(:any)
        $routes->addRedirect('/meet/jitsi/api', 'meet/jitsi/endpoint/main');
        $routes->group('api', function ($routes) {
            # /www/meet/jitsi/api/main/(:any)
            $routes->get('main', 'MainApiController::easyIntegrates');
            $routes->get('main/(:segment)', 'MainApiController::easyIntegrates/$1');
            $routes->get('main/(:any)', 'MainApiController::easyIntegrates/$1');
            $routes->post('main', 'MainApiController::easyIntegrates');
            $routes->post('main/(:segment)', 'MainApiController::easyIntegrates/$1');
            $routes->post('main/(:any)', 'MainApiController::easyIntegrates/$1');
        });
        # /www/meet/jitsi/endpoint/(:any)
        $routes->addRedirect('/meet/jitsi/endpoint', 'meet/jitsi/endpoint/main');
        $routes->group('endpoint', function ($routes) {
            # /www/meet/jitsi/endpoint/main/(:any)
            $routes->get('main', 'MainEndPointController::easyIntegrates');
            $routes->get('main/(:segment)', 'MainEndPointController::easyIntegrates/$1');
            $routes->get('main/(:any)', 'MainEndPointController::easyIntegrates/$1');
            $routes->post('main', 'MainEndPointController::easyIntegrates');
            $routes->post('main/(:segment)', 'MainEndPointController::easyIntegrates/$1');
            $routes->post('main/(:any)', 'MainEndPointController::easyIntegrates/$1');
        });
    });
});
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
