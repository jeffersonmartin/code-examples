<?php
// Assuming that you have a MySQL database server running on your local machine,
// you'll need to create a new database for your Laravel application. In this
// example, we'll call it `mvc_basics` with `utf8_unicode_ci`. You can use your
// local development user account or create a new one, as long as it has rights
// for `mvc_basics` database. In our example, I have a user called `jefferson`
// and a password `NotSoSecret`.
//
// ~/Sites/presentation/mvc-basics/.env
// Use your text editor to edit the .env file and replace the default `DB_*` fields
// with your MySQL credentials. The .env file is a hidden configuration file that
// is not committed to your Git repository and has your local servers parameters.
//

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=mvc_basics
DB_USERNAME=jefferson
DB_PASSWORD=NotSoSecret