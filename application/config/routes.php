<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//CILEGON
$route['api/get/data/pci']				= 'cilegon/pcidata';
$route['api/get/ispu/pci']				= 'cilegon/pciispu';
$route['api/get/data/simpangtiga']		= 'cilegon/simpangtigadata';
$route['api/get/ispu/simpangtiga']		= 'cilegon/simpangtigaispu';
$route['api/get/data/merak']			= 'cilegon/merakdata';
$route['api/get/ispu/merak']			= 'cilegon/merakispu';
$route['api/get/data/ciwandan']			= 'cilegon/ciwandandata';
$route['api/get/ispu/ciwandan']			= 'cilegon/ciwandanispu';

$route['api/add/aqmdata/cilegon']		= 'cilegon/aqmdata';

$route['default_controller']			= 'api';
$route['404_override']					= '';
$route['translate_uri_dashes']			= FALSE;
