<?php

defined('BASEPATH') OR exit('No direct script access allowed');

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
  |	https://codeigniter.com/user_guide/general/routing.html
  |
  | -------------------------------------------------------------------------
  | RESERVED ROUTES
  | -------------------------------------------------------------------------
  |
  | There are three reserved routes:
  |
  |	$route['default_controller'] = 'welcome';
  |
  | This route indicates which controller class should be loaded if the
  | URI contains no data. In the above example, the "welcome" class
  | would be loaded.
  |
  |	$route['404_override'] = 'errors/page_missing';
  |
  | This route will tell the Router which controller/method to use if those
  | provided in the URL cannot be matched to a valid route.
  |
  |	$route['translate_uri_dashes'] = FALSE;
  |
  | This is not exactly a route, but allows you to automatically route
  | controller and method names that contain dashes. '-' isn't a valid
  | class or method name character, so it requires translation.
  | When you set this option to TRUE, it will replace ALL dashes in the
  | controller and method URI segments.
  |
  | Examples:	my-controller/index	-> my_controller/index
  |		my-controller/my-method	-> my_controller/my_method
 */
$route['default_controller'] = 'WelcomeController';

//admin
$route['admin']['GET'] = 'admin/IndexController/index';

//kuliner
$route['admin/kuliner']['GET'] = 'admin/KulinerAcehController/index';

$route['admin/kuliner/tambah']['GET'] = 'admin/KulinerAcehController/tambahKuliner';
$route['admin/kuliner/simpan']['POST'] = 'admin/KulinerAcehController/simpanKuliner';

$route['admin/kuliner/ubah/(:any)']['GET'] = 'admin/KulinerAcehController/editKulinerAceh/$1';
$route['admin/kuliner/ubah']['POST'] = 'admin/KulinerAcehController/ubahKuliner';

$route['admin/kuliner/hapus/(:any)']['GET'] = 'admin/KulinerAcehController/hapusKuliner/$1';
//end kuliner

//wisata
$route['admin/wisata']['GET'] = 'admin/WisataAcehController/index';

$route['admin/wisata/tambah']['GET'] = 'admin/WisataAcehController/tambahWisata';
$route['admin/wisata/simpan']['POST'] = 'admin/WisataAcehController/simpanWisata';

$route['admin/wisata/ubah/(:any)']['GET'] = 'admin/WisataAcehController/editWisataAceh/$1';
$route['admin/wisata/ubah']['POST'] = 'admin/WisataAcehController/ubahWisata';

$route['admin/wisata/hapus/(:any)']['GET'] = 'admin/WisataAcehController/hapusWisata/$1';
//end wisata

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
