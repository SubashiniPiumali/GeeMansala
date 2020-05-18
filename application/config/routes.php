<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['register'] = 'users/register';
$route['login'] = 'users/login';

//-----------writer routes

$route['writer/index'] = 'Writer/index';
$route['writer/createpost'] = 'Posts/create';
$route['writer/index/(:any)'] = 'Writer/view/$1';
$route['writer/editpost/(:any)'] = 'Posts/edit/$1';
$route['writer/delete/(:any)'] = 'Posts/delete/$1';
$route['writer/updatepost'] = 'posts/update';
$route['writer/addreview'] = 'posts/addreview';
$route['writer/editreview'] = 'Review/edit_review';
$route['writer/editprofile'] = 'Writer/editprofile';

$route['updateprofile'] = 'users/edit';
$route['changepassword'] = 'users/changepassword';

$route['delete/review/(:any)'] = 'Review/remove_review/$1';

//-----------admin routes
$route['admin/index'] = 'Admin/index';

$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


//------------------subashini routs---------
$route['pages/(:any)'] = 'pages/viewonepost/$1';


//-------------------udara---------------

$route['admin'] = 'Admin/index';
$route['admin/index'] = 'Admin/index';
$route['admin/index/(:any)'] = 'Admin/viewpost/$1';

$route['remove_user/(:any)'] = 'Admin/removeuser/$1';


$route['admin/posts'] = 'Admin/viewpost';

$route['remove_post/(:any)'] = 'Admin/removepost/$1';

$route['remove_user2/(:any)'] = 'Admin/removeuser2/$1';

$route['admin/createuser'] = 'Admin/create';