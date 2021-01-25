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
