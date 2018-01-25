# CS Unipi API & Author <img src="https://github.com/kapposds/csunipi-api/blob/master/public/images/logos/cs_unipi_author_logo.png" width="85" height="70" />

description, features?

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
* type `php artisan migrate --seed` to create and populate tables
* edit *.env* to configure mail server

## Testing

* type `php artisan serve` to serve the application on localhost:8000 address by default. specify --host or --port for different values
* open your browser and point it to `http://localhost:8000` to use the application. Stop the server by pressing `Ctrl + C` in your command line.
* use the following dummy user credentials to log in to the app:
	* E-mail: csunipi_dummyuser@gmail.com
	* Password (Κωδικός): csunipi


## Bug Reports

If you discover bug within CS Unipi Api & Author, please send an e-mail to Alexandros Kappos at kapposds@gmail.com.

## License

mit..
