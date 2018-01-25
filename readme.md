# CS Unipi API & Author <img src="https://github.com/kapposds/csunipi-api/blob/master/public/images/logos/cs_unipi_author_logo.png" width="85" height="70" />

Part of Bachelors Thesis. Underlying back-end API and authoring platform (CRUD) with a simple interface used by the University of Piraeus, Computer Science faculty administrators.

Through this application, admins can manage the contents (articles, pages, people, images) available to the faculty's hybrid mobile app (CS Unipi Mobile https://github.com/kapposds/csunipi-mobile). They can also edit their profile, and super admins can manage other admins. 

The application is only in Greek.

## Server Requirements

 Your server must meet the following requirements in order to run the app developed with Laravel 5.2 version:
* PHP >= 5.5.9
* OpenSSL PHP Extension
* PDO PHP Extension
* Mbstring PHP Extension
* Tokenizer PHP Extension

Laravel utilizes Composer as its dependency manager. So, make sure you have Composer (https://getcomposer.org/) installed on your machine.

For more info check the official documentation: https://laravel.com/docs/5.2/installation

## Installation
Open a terminal and navigate to your projects directory by typing `cd relative/path/to/projects/directory`(i.e. xampp/htdocs , if you use apache as local webserver)
* type `git clone https://github.com/kapposds/csunipi-api yourprojectname` to clone the repository
* type `cd projectname` to go to cloned project directory
* type `composer install` to install dependencies
* type `composer update` to get latest dependencies versions
* copy *.env.example* to *.env* (if you are having trouble creating the file, try doing it in text editor i.e. sublime https://www.sublimetext.com/3)
* type `php artisan key:generate`to regenerate secure key

First step to get database ready: create an empty database (I used utf8_unicode_ci collation). I used MySQL and phpmyadmin (included in xampp installation) as my administration tool.
* To configure database in *.env* file :
   * set DB_CONNECTION (i.e. mysql)
   * set DB_DATABASE (i.e. yourdb)
   * set DB_USERNAME (i.e. yourusername)
   * set DB_PASSWORD (i.e. yourpassword)
* type `php artisan migrate --seed` to create and populate tables. For more migration commands visit https://laravel.com/docs/5.2/migrations#running-migrations
* edit *.env* to configure mail server

## Testing

* type `php artisan serve` to serve the application on `localhost:8000` address by default. Optionally use --host or --port parameters to specify address , port
* open your browser and point it to `http://localhost:8000` to use the application. Stop the server by pressing `Ctrl + C` in your command line.
* use the following dummy <b>administrator</b> credentials to log in:
	* E-mail: csunipi_dummy_admin@gmail.com
	* Password (Κωδικός): csunipi
* use the following dummy <b> super administrator</b> credentials to log in and be able to manage other users:
	* E-mail: csunipi_dummy_superadmin@gmail.com
	* Password (Κωδικός): csunipi

## Bug Reports

If you discover bug within CS Unipi Api & Author, please send an e-mail to Alexandros Kappos at kapposds@gmail.com.

## License

mit?
