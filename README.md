# Covid Tracker
Open Source Tracker Developed CodeIgniter Framework 

Steps to be followed

download the package from GIT Repository

Step 1 :	Install Xampp Webserver

Step 2 : 	After Install Xampp Webserver goto htdocs in xampp folder and page the code into folder

Step 3 : 	After paste code then goto config folder and change base url as below in config.php file

$config['base_url'] 		= 'http://'.$_SERVER['HTTP_HOST'].'/covid19tracker/';
$config['base_url_file'] 	= 'http://'.$_SERVER['HTTP_HOST'].'/covid19tracker/';

Step 4 : after change url then goto /data folder and import sql folder with Database name

Step 5 : then Change the database name and other data in database.php file in /application/config folder

Step 6 : and run url with /admin path

Step 7 : Give user name and password as below
	username : admin@admin.in
	password : admin
	
Step 8 : It goes to Dashboard page and we can get data.

Note : By default it assing country as India(IN)
