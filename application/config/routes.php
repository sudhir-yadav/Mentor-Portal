<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'login_controller';

$route['mentor'] = 'mentor_controller';
$route['mentor/(:any)'] = 'mentor_controller/$1';


$route['student'] = 'student_controller';
$route['student/(:any)'] = 'student_controller/$1';


$route['admin'] = 'admin_login_controller';
$route['admin/login'] = 'admin_login_controller/login';

$route['admin/dashboard'] = 'admin_controller';
$route['admin/logout'] = 'admin_controller/logout';
$route['admin/allocations'] = 'admin_controller/allocations';
$route['admin/users'] = 'admin_controller/users';


$route['(:any)'] = 'help/show404';
$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;
