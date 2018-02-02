# CS Unipi API & Author <img src="https://github.com/kapposds/csunipi-api/blob/master/public/images/logos/cs_unipi_author_logo.png" width="85" height="70" />

Part of Bachelors Thesis. Underlying back-end API and authoring platform (CRUD) with a simple user interface used by the University of Piraeus, Computer Science department administrators. Developed with Laravel Framework.

Through this application, admins can manage the contents (articles, pages, people, images) available to the department's hybrid mobile app (CS Unipi Mobile https://github.com/kapposds/csunipi-mobile). They can also edit their profile, and super admins can manage other admins. 

The application is only in Greek.

## System Requirements
You need to install a web server, such as Apache, and of course PHP. Also its required to install a database as well, such as  MySQL.

Your system must meet the following requirements in order to build the app developed with Laravel 5.2 version:
* PHP >= 5.5.9
* OpenSSL PHP Extension
* PDO PHP Extension
* Mbstring PHP Extension
* Tokenizer PHP Extension

The above requirements are included in xampp package https://www.apachefriends.org/download.html

Laravel utilizes Composer as its dependency manager. So, make sure you have Composer (https://getcomposer.org/) installed on your machine.

For more info check the official documentation: https://laravel.com/docs/5.2/installation

## Installation
Open a terminal and navigate to your projects directory by typing `cd relative/path/to/projects/directory`(i.e. xampp/htdocs , if you use apache as local webserver)
* type `git clone https://github.com/kapposds/csunipi-api yourprojectname` to clone the repository
* type `cd projectname` to go to cloned project directory
* type `composer install` to install dependencies
* type `composer update` to get latest dependencies versions
* copy *.env.example* to *.env* (if you are having trouble creating the file, try doing it in text editor i.e. sublime https://www.sublimetext.com/3)
* type `php artisan key:generate`to regenerate secure key (make sure that a long string is assigned to the APP_KEY variable in .env file)

First step to get database ready: create an empty database (I used utf8_unicode_ci collation). I used MySQL and phpmyadmin (included in xampp installation) as my administration tool.
* To configure database in *.env* file :
   * set DB_CONNECTION (i.e. mysql)
   * set DB_DATABASE (i.e. yourdb)
   * set DB_USERNAME (i.e. yourusername)
   * set DB_PASSWORD (i.e. yourpassword)
* type `php artisan migrate --seed` to create and populate tables. For more migration commands visit https://laravel.com/docs/5.2/migrations#running-migrations
*To configure mail server:
   * MAIL_HOST (i.e. smtp.gmail.com)
   * MAIL_PORT  (i.e. 587 or 25)
   * MAIL_USERNAME  (i.e. your@mailaddress.com)
   * MAIL_PASSWORD (i.e. yourpassword)
   * MAIL_FROM_ADDRESS (i.e. emailaddres@youwanttoappeartouser.com) 
   * MAIL_FROM_NAME (i.e.'CS Unipi Author' or whatever Name you want to appear when a user recieves a mail from the app) 
   
*Dont forget to allow less secure apps to use the mail, from your e-mail server settings (i.e. https://mail.google.com)

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
