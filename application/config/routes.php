<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// routes for authentications
$route['login'] = 'auth';
$route['register'] = 'auth/register';
$route['logout'] = 'auth/logout';

/**
 * routes for customers
 */
// home route
$route["home"] = "home";

/**
 * routes for admins
 */
// dashboard route
$route["dashboard"] = "dashboard";
// users management routes
$route["kelola-users"] = "user";
$route["kelola-users/tambah"] = "user/create";
$route["kelola-users/update/(:num)"] = "user/update/$1";
$route["kelola-users/hapus/(:num)"] = "user/delete/$1";
// packages categories management route
$route['kelola-kategori'] = 'category';
// travel destinations routes
$route['kelola-destinasi'] = 'destination';
$route['kelola-destinasi/tambah'] = 'destination/create';
