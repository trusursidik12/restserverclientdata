<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//SUMATERA
$route['api/add/aqmdata/sumatera1']		= 'sumatera/aqmdata';

//SULAWESI
$route['api/add/aqmdata/sulawesi1']		= 'sulawesi/aqmdata';

//KALIMANTAN
$route['api/add/aqmdata/kalimantan1']	= 'kalimantan/aqmdata';

//JADEBEK
$route['api/add/aqmdata/bekasi1']		= 'bekasi/aqmdata';
$route['api/add/aqmdata/depok1']			= 'depok/aqmdata';
$route['api/add/aqmdata/jakarta1']		= 'jakarta/aqmdata';

//SUKOHARJO
$route['api/get/data/cemsrum']			= 'sukoharjo/cemsrumdata';
$route['api/get/data/plesan']			= 'sukoharjo/plesandata';
$route['api/get/data/gupit']			= 'sukoharjo/gupitdata';
$route['api/get/data/rum']				= 'sukoharjo/rumdata';

$route['api/add/cemsdata/sukoharjo']	= 'sukoharjo/cemsdata';
$route['api/add/camsdata/sukoharjo']	= 'sukoharjo/camsdata';

//CILEGON
$route['api/get/data/pci1']				= 'cilegon/pcidata';
$route['api/get/ispu/pci1']				= 'cilegon/pciispu';
$route['api/get/data/simpangtiga1']		= 'cilegon/simpangtigadata';
$route['api/get/ispu/simpangtiga1']		= 'cilegon/simpangtigaispu';
$route['api/get/data/merak1']			= 'cilegon/merakdata';
$route['api/get/ispu/merak1']			= 'cilegon/merakispu';
$route['api/get/data/ciwandan1']			= 'cilegon/ciwandandata';
$route['api/get/ispu/ciwandan1']			= 'cilegon/ciwandanispu';

$route['api/add/aqmdata/cilegon1']		= 'cilegon/aqmdata';

$route['default_controller']			= 'api';
$route['404_override']					= '';
$route['translate_uri_dashes']			= FALSE;

