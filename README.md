#BLOG REST API SYSTEM

##SETUP

Step 1
Clone Repository

Click on Clone Repository, then enter the repository link copied and click on clone.

Step 2
Select Local Directory

Step 3
Open Cloned File

After our project has successfully been cloned, we can now go ahead to open it.

Step 4
Setting Up Project

Laravel projects requires extra setups before it can run on your local computers.

First, we are going to install Node Module and Vendor files.

To install node module run
npm install
on your VS Code Terminal and wait for it to complete.

To install your Vendor file run
composer install
on your VS Code Terminal and wait for it to complete.

Step 5
Setup .env file

To setup your .env, kindly duplicate your .env.example file and rename the duplicated file to .env.

Step 6
Setup Database

For this content, I'm using PHP MyAdmin Database.

On your .env file, locate this block of code below.
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=sample_api
DB_USERNAME=root
DB_PASSWORD=
The block of code above represents your Database connection and subnetweb is my database name, which you can create your database name to be something else.

Step 7
Commands

To finalize this everything, run the following commands on your terminal.

php artisan key:generate
php artisan migrate
php artisan serve
