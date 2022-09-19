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
$routes->setDefaultNamespace('App\Controllers\Frontend');
$routes->setDefaultController('HomeController');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'HomeController::index');

$routes->get('about/about-us', 'AboutController::about');
$routes->get('about/secretary-message', 'AboutController::secretary');
$routes->get('about/college-at-glance', 'AboutController::glance');
$routes->get('about/mission-vision', 'AboutController::mission_vision');
$routes->get('about/objective', 'AboutController::objective');
$routes->get('about/management', 'AboutController::management');
$routes->get('about/mandatory-disclosure', 'AboutController::disclosure');

$routes->get('academic/courses', 'AcademicController::courses');
$routes->get('academic/admission-process', 'AcademicController::admission_process');
$routes->get('academic/academic-calendar', 'AcademicController::academic_calendar');
$routes->get('academic/recognition-approval', 'AcademicController::recognition_approval');

$routes->get('student/syllabus', 'StudentController::syllabus');
$routes->get('student/routine', 'StudentController::routine');
$routes->get('student/course-material', 'StudentController::course_material');
$routes->get('student/online-class', 'StudentController::online_class');
$routes->get('student/placement', 'StudentController::placement');

$routes->get('gallery/photo', 'GalleryController::photo');
$routes->get('gallery/video', 'GalleryController::video');

$routes->get('blog', 'BlogController::index');
$routes->get('blog/(:num)/(:any)', 'BlogController::index/$1');

$routes->get('admission-form', 'AdmissionFormController::index');
$routes->post('admissionform', 'AdmissionFormController::create', ['as'=>'admissionform.create']);

$routes->get('fee-payment', 'FeePaymentController::index');

$routes->get('contact', 'ContactController::index');
$routes->post('sendmail', 'ContactController::sendmail', ['as'=>'sendmail.email']);

$routes->get('account-information', 'HomeController::account_information');

$routes->get('anti-ragging', 'HomeController::ragging');

$routes->get('alumni-association', 'HomeController::alumni');

$routes->get('career', 'CareerController::index');
$routes->get('career/apply', 'CareerController::apply');

$routes->get('notices', 'HomeController::notice');

$routes->get('brochures', 'HomeController::brochures');


/*
*
*------------------------------------------------------------------------------------
* backend routes
*------------------------------------------------------------------------------------
*/
$routes->group('admin', ["filter" => "auth", "namespace" => "App\Controllers\Admin"], function($routes) {
    $routes->get('dashboard', 'DashboardController::index');
    $routes->match(['get', 'post'],'course', 'CourseController::index');
    $routes->get('course/trash/(:any)', 'CourseController::trash/$1');
    $routes->post('course/edit/(:any)', 'CourseController::edit/$1');

    $routes->match(['get', 'post'], 'photo', 'GalleryController::photo');
    $routes->post('photo/edit/(:any)', 'GalleryController::edit/$1');
    $routes->get('photo/trash/(:any)', 'GalleryController::trash/$1');

    $routes->match(['get', 'post'], 'video', 'GalleryController::video');
    $routes->post('video/edit/(:any)', 'GalleryController::editv/$1');
    $routes->get('video/trash/(:any)', 'GalleryController::trashv/$1');
    $routes->get('logout', 'AuthController::logout');
});

$routes->get('admin/', function() {return redirect()->to('admin/login');}, ["filter" => "noauth"]);
$routes->match(['get', 'post'], 'admin/login', '\App\Controllers\Admin\AuthController::login', ["filter" => "noauth"]);
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
