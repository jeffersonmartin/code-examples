#!/bin/bash
# Run the following commands to create a database seed file, which is a
# recipe for Laravel to populate rows in a database for you automatically.

# Navigate to the top directory of your Laravel application
cd ~/Sites/presentation/mvc-basics

# Use the artisan make command to create a seed file.
php artisan make:seed EventTicketDemoSeed