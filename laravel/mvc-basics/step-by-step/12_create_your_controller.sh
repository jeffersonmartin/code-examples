#!/bin/bash
# Run the following commands to create a controller file, which is a
# where the magic happens in Laravel for getting data from your database and
# rendering your view files.

# Navigate to the top directory of your Laravel application
cd ~/Sites/presentation/mvc-basics

# Use the artisan make command to create a new controller file.
php artisan make:controller --resource EventTicketController