<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'main';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/**
 * global routes
 */
$route['katalog-wisata'] = 'main/travelCatalog';
$route['detail/(:any)'] = 'main/detail/$1';

/**
 * auth routes
 */
$route['login'] = 'auth';
$route['register'] = 'auth/register';
$route['logout'] = 'auth/logout';

/**
 * customer routes
 */
$route["home"] = "home";

/**
 * admin routes
 */
$route["dashboard"] = "dashboard";

$route["kelola-users"] = "user";
$route["kelola-users/tambah"] = "user/create";
$route["kelola-users/update/(:num)"] = "user/update/$1";
$route["kelola-users/hapus/(:num)"] = "user/delete/$1";
$route['kelola-kategori'] = 'category';

$route['kelola-wisata'] = 'travel';
$route['kelola-wisata/tambah'] = 'travel/create';
$route['kelola-wisata/update/(:num)'] = 'travel/update/$1';
$route['kelola-wisata/hapus/(:num)'] = 'travel/delete/$1';
