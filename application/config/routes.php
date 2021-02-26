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
$route['booking-wisata/(:num)'] = 'main/bookingtravel/$1';
$route['proses-booking/(:num)'] = 'main/processbooking/$1';
$route['konfirmasi-pembayaran/(:any)'] = 'main/paymentconfirmation/$1';
$route['pembayaran-berhasil'] = 'main/paymentsucessfully';
$route['testimoni'] = 'main/testimonials';
$route['testimoni/tambah'] = 'main/addtestimonial';
$route['blogs'] = 'main/blogs';
$route['blogs/(:any)']  = 'main/blogsDetail/$1';
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
$route['detail-booking/(:num)'] = 'home/detail/$1';

/**
 * admin routes
 */
$route["dashboard"] = "dashboard";

$route["kelola-users"] = "user";
$route["kelola-users/tambah"] = "user/create";
$route["kelola-users/update/(:num)"] = "user/update/$1";
$route["kelola-users/hapus/(:num)"] = "user/delete/$1";

$route['kelola-kategori'] = 'category';
$route['kelola-kategori/tambah'] = 'category/create';
$route['kelola-kategori/update/(:num)'] = 'category/update/$1';
$route['kelola-kategori/hapus/(:num)'] = 'category/delete/$1';

$route['kelola-wisata'] = 'travel';
$route['kelola-wisata/tambah'] = 'travel/create';
$route['kelola-wisata/update/(:num)'] = 'travel/update/$1';
$route['kelola-wisata/hapus/(:num)'] = 'travel/delete/$1';

$route['kelola-booking'] = 'booking';
$route['kelola-booking/detail/(:num)'] = 'booking/detail/$1';
$route['kelola-booking/hapus/(:num)'] = 'booking/delete/$1';

$route['kelola-testimoni'] = 'testimonial';
$route['kelola-testimoni/tambah'] = 'testimonial/create';
$route['kelola-testimoni/update/(:num)'] = 'testimonial/update/$1';
$route['kelola-testimoni/hapus/(:num)'] = 'testimonial/delete/$1';

$route['kelola-blog'] = 'blog';
$route['kelola-blog/tambah'] = 'blog/create';
$route['kelola-blog/detail/(:num)'] = 'blog/detail/$1';
$route['kelola-blog/update/(:num)'] = 'blog/update/$1';
$route['kelola-blog/hapus/(:num)'] = 'blog/delete/$1';
