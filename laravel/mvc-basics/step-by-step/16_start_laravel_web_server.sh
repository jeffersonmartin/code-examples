#!/bin/bash
# Run the following commands to start Laravel's built-in web server. You'll need
# to have PHP installed, however this makes it easy to work with different Laravel
# applications without needing to modify your Apache or Nginx configuration.

# Open a new Terminal window so you can run the following command to run a web
# server that is listening continually, and keep the first window for running
# artisan make commands.

# Navigate to the top directory of your Laravel application
cd ~/Sites/presentation/mvc-basics

# Use the artisan serve command to start the built-in web server on port 8000.
php artisan serve
Laravel development server started: <http://127.0.0.1:8000>

