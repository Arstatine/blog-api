# BLOG REST API SYSTEM

## TO SETUP THE PROJECT

### Step 1

Clone Repository

Click on Clone Repository, then enter the repository link copied and click on clone.

### Step 2

Select Local Directory

### Step 3

Open Cloned File

After our project has successfully been cloned, we can now go ahead to open it.

### Step 4

Setting Up Project
Laravel projects requires extra setups before it can run on your local computers.
First, we are going to install Node Module and Vendor files.

To install node module<br>
&nbsp;&nbsp;&nbsp;&nbsp;run `npm install`<br>
On your VS Code Terminal and wait for it to complete.

To install your Vendor file<br>
&nbsp;&nbsp;&nbsp;&nbsp;run `composer install`<br>
On your VS Code Terminal and wait for it to complete.

### Step 5

Setup .env file

To setup your .env, kindly duplicate your .env.example file and rename the duplicated file to .env.

### Step 6

Setup Database

For this content, I'm using PHP MyAdmin Database.

On your .env file, locate this block of code below.<br>
DB_CONNECTION=mysql<br>
DB_HOST=127.0.0.1<br>
DB_PORT=3306<br>
DB_DATABASE=sample_api<br>
DB_USERNAME=root<br>
DB_PASSWORD=<br>
The block of code above represents your Database connection and subnetweb is my database name, which you can create your database name to be something else.

### Step 7

Commands

To finalize this everything, run the following commands on your terminal.

&nbsp;&nbsp;&nbsp;&nbsp;`php artisan key:generate`
<br>
&nbsp;&nbsp;&nbsp;&nbsp;`php artisan migrate`
<br>
&nbsp;&nbsp;&nbsp;&nbsp;`php artisan serve`
