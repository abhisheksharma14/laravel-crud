# Polar | Laravel Crud
Laravel based application for image uploading. It calculates the hue value of and image uploaded and than save the data to database. User can search uploaded images in a particular hue range selected by the user.
# Prerequisites:
-   composer
-   php-mbstring php-dom   (```sudo apt-get install php-mbstring php-dom```)
-   mysql

# Installation:

  1. Clone the repository the machine to be served.
  2. cd to the cloned directory and run ```composer install``` to install the application
  3. Edit file .env.example and update the credentials and config. Than save the file as .env
  4. Generate key ```php artisan key:generate```
  5. Login to mysql command line and create database named ```polar```
  6. Run following commands in the mysql shell:

```sh 
    USE polar;
    DROP TABLE IF EXISTS `images`;
    CREATE TABLE `images` (
      `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
      `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
      `hue` int(11) NOT NULL,
      `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
      `created_at` timestamp NULL DEFAULT NULL,
      `updated_at` timestamp NULL DEFAULT NULL,
      PRIMARY KEY (`id`)
    ) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
```

  7. Use command ```sudo php artisan serve --host <ip> --port=<portnumber>``` to start the serve.
  8. Hit ```http://<ip>:<portnumber>``` in your browser to validate the installation.

