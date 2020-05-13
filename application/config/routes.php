<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//SULAWESI
$route['api/add/aqmdata/sulawesi']		= 'sulawesi/aqmdata';

//KALIMANTAN
$route['api/add/aqmdata/kalimantan']	= 'kalimantan/aqmdata';

//JADEBEK
$route['api/add/aqmdata/bekasi']		= 'bekasi/aqmdata';
$route['api/add/aqmdata/depok']			= 'depok/aqmdata';
$route['api/add/aqmdata/jakarta']		= 'jakarta/aqmdata';

//SUKOHARJO
$route['api/get/data/cemsrum']			= 'sukoharjo/cemsrumdata';
$route['api/get/data/plesan']			= 'sukoharjo/plesandata';
$route['api/get/data/gupit']			= 'sukoharjo/gupitdata';
$route['api/get/data/rum']				= 'sukoharjo/rumdata';

$route['api/add/cemsdata/sukoharjo']	= 'sukoharjo/cemsdata';
$route['api/add/camsdata/sukoharjo']	= 'sukoharjo/camsdata';

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

