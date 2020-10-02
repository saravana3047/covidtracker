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
$route['default_controller'] 			= 'home';
$route['video/subject'] 				= 'home/subject';
$route['search'] 						= 'home/search';
$route['gallery'] 						= 'home/gallery';
$route['galleryview/(:any)'] 			= 'home/galleryview/$1';
$route['weekly_list'] 					= 'home/weekly_list';
$route['weekly'] 						= 'home/weekly'; 
$route['latest-news'] 					= 'home/latestanalysis';
$route['getCountryData'] 				= 'home/getCountryData';
$route['download/(:any)'] 				= 'home/download/$1';
$route['favourites'] 					= 'home/favourites';
$route['bookmarks'] 					= 'home/bookmarks';
$route['cinema-news/(:any)'] 				= 'home/bookview/$1';
$route['login'] 						= 'home/login';
$route['logout'] 						= 'home/logout';
$route['history'] 						= 'home/videoHistory';
$route['user/activate/(:any)'] 			= 'home/activate/$1';
$route['user/forgotpassword/(:any)']	= 'home/forgotpassword/$1';
$route['myprofile'] 					= 'home/myprofile';
$route['changepassword'] 				= 'home/changepassword';
$route['video/topics'] 					= 'home/topics';
$route['video/topics/(:any)'] 			= 'home/topics/$1';
$route['video/liked'] 					= 'home/liked/$1';
$route['video/topic_view/(:any)']		= 'home/topic_view/$1';
$route['playlist/(:any)'] 				= 'home/playlist/$1';
$route['video/topic_view/(:any)/(:any)']		= 'home/topic_view/$1/$2';
$route['jobs'] 							= 'home/jobs';
$route['contact'] 						= 'home/contact';
$route['upload'] 						= 'home/upload';
$route['specialization'] 				= 'home/specialization'; 
$route['uploadResume'] 					= 'home/uploadResume'; 
$route['thank-you'] 					= 'home/thankyou'; 
$route['googleplussignin'] 				= 'home/googleplussignin';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
