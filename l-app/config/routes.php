<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller']   = 'HomeIndex';
$route['404_override']         = FALSE;
$route['translate_uri_dashes'] = TRUE;

// ADMIN.
$route[FADMIN] = FADMIN.'/auth';
$route[FADMIN.'/login'] = FADMIN.'/auth';
$route[FADMIN.'/auth-validation'] = FADMIN.'/auth/validation/user';
$route[FADMIN.'/logout'] = FADMIN.'/auth/logout';
$route[FADMIN.'/forgot'] = FADMIN.'/auth/forgot';
$route[FADMIN.'/permissions'] = FADMIN.'/permissions/index';
$route[FADMIN.'/permissions/group/edit/([a-z0-9]+)'] = FADMIN.'/permissions/edit_group/$1';
$route[FADMIN.'/permissions/group/add'] = FADMIN.'/permissions/add_group';
$route[FADMIN.'/permissions/group/([a-z0-9]+)'] = FADMIN.'/permissions/detail_group/$1';
$route[FADMIN.'/permissions/role/([a-z0-9]+)'] = FADMIN.'/permissions/role/$1';
$route[FADMIN.'/permissions/edit-role/([0-9]+)/([a-z0-9]+)'] = FADMIN.'/permissions/edit_group_role/$1/$2';
$route[FADMIN.'/permissions/edit-role/([0-9]+)'] = FADMIN.'/permissions/edit_list_role/$1';


// WEB.
$route['home'] = FWEB.'/home/index';
$route['index-post'] = FWEB.'/index-post';
$route['pesawat'] = FWEB.'/pesawat';
$route['blog'] = FWEB.'/blog';
$route['index-post/([0-9-]+)'] = FWEB.'/index-post/index/$1';
$route['category/([a-z0-9-]+)'] = FWEB.'/category/index/$1';
$route['category/([a-z0-9-]+)/([0-9]+)'] = FWEB.'/category/index/$1/$2';
$route['tag/([a-z0-9-]+)'] = FWEB.'/tag/index/$1';
$route['tag/([a-z0-9-]+)/([0-9]+)'] = FWEB.'/tag/index/$1/$2';
$route['pages/([a-z0-9-]+)'] = FWEB.'/pages/index/$1';
$route['search'] = FWEB.'/search';
$route['kereta-api/cari'] = FWEB.'/kereta/search_rute';
$route['pesawat/cari'] = FWEB.'/pesawat/search_rute';
$route['gallery'] = FWEB.'/gallery';
$route['contact'] = FWEB.'/contact';
$route['maintenance'] = 'maintenance';

// dinamic routes.
foreach(glob(APPPATH."/config/routes/*.php") as $routes_file)
{
	require_once $routes_file;
}
