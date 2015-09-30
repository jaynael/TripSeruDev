<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "welcome";
$route['404_override'] = '';
$route['login']= "login";
$route['dashboard']= "dashboard";
$route['dashboard/login']= "dashboard/login";
$route['dashboard/verifikasi']= "dashboard/verifikasi";
$route['daftar']= "daftar";
$route['home']= "home";

//Reseru
$route['reseru/inserttrip'] = "reseru/inserttrip";

//Destinasi
$route['destinasi'] = "destinasi";
$route['dashboard/destinasi'] = "dashboard/destinasi";
$route['destinasi/view/(:any)/'] = 'destinasi/view/$1';

//story
$route['story/insert']= "story/insert";
$route['story/read/(:any)/']= "story/read/$1";

//order
$route['order/insert']= "order/insert";

//upload
//$route['atur/upload'] = 'upload';
$route['atur/do_upload'] = 'atur/do_upload';

//page
$route['page/privacy']="page/privacy";


//Partner Affiliate
$route['partner']="partner";
$route['partner/login']="partner/login";
$route['partner/verifylogin']="partner/verifylogin";
$route['partner/to']="partner/partner_to";
$route['partner/check_email_availablity']="partner/check_email_availablity";
$route['partner/new_register_to']="partner/new_register_to";
$route['partner/home']="partner/home";
$route['partner/create-trip']="partner/create";
$route['partner/create-trip/itinery']="partner/create_itinery";
$route['partner/create-trip/harga']="partner/create_harga";
$route['partner/create-trip/syarat-ketentuan']="partner/create_syarat";

//admin
$route['atur/login']="atur/login";
$route['atur/logout']="atur/logout";
$route['atur/admin']="atur/admin";
$route['atur/verifylogin']="atur/verifylogin";
$route['atur/destinasi']="atur/destinasi";
$route['atur/editdestinasi/(:any)/']="atur/editdestinasi/$1";
//$route['atur/destinasi/insert']="atur/destinasi/insert";
$route['destinasi/insert'] = "destinasi/insert";
$route['destinasi/update'] = "destinasi/update";
$route['atur/destinasi/all'] = "atur/alldestinasi";

/* End of file routes.php */
/* Location: ./application/config/routes.php */