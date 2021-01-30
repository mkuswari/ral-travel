<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// routes for authentications
$route['login'] = 'auth';
$route['register'] = 'auth/register';

// routes for customers
$route["home"] = "home";

// routes for admins
$route["dashboard"] = "dashboard";
// users management routes
$route["kelola-users"] = "user";
$route["kelola-users/tambah"] = "user/create";
$route["kelola-users/hapus/(:num)"] = "user/delete/$1";
$route["kelola-users/detail/(:num)"] = "user/detail/$1";
$route["kelola-users/update/(:num)"] = "user/update/$1";
