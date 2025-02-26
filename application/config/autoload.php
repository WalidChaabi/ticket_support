<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$autoload['packages'] = array();

$autoload['libraries'] = array('database', 'session');

$autoload['drivers'] = array();

$autoload['helper'] = array('url', 'form');  // Add 'url' and 'form' helpers

$autoload['config'] = array();

$autoload['language'] = array();

$autoload['model'] = array('TicketAdmin_model', 'TicketUser_model', 'Ticket_model','TicketComment_model','TicketStatus_model');
