<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


// User Authentication Routes
$route['user/login'] = 'UserAuthController/login';
$route['user/do_login'] = 'UserAuthController/do_login';
$route['user/logout'] = 'UserAuthController/logout';
$route['user/dashboard'] = 'UserDashboardController/index';

// Admin Authentication Routes
$route['admin/login'] = 'AdminAuthController/login';
$route['admin/do_login'] = 'AdminAuthController/do_login';
$route['admin/logout'] = 'AdminAuthController/logout';
$route['admin/dashboard'] = 'AdminDashboardController/index';

// Client routes
$route['ticket/getTickets'] = 'TicketController/getTickets';
$route['ticket/getTicketStatus'] = 'TicketController/getTicketStatus';
$route['ticket/closeTicket/(:num)'] = 'TicketController/closeTicket/$1'; // Ensure proper routing of ticket ID
$route['ticket/respondToTicket'] = 'TicketController/respondToTicket'; // Ensure proper routing of ticket ID
