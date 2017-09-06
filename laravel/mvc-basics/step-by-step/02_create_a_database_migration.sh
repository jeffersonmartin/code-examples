#!/bin/bash
# Run the following commands to create a database migration file, which is a
# abstraction layer recipe for Laravel to perform a CREATE TABLE query.

# Navigate to the migrations folder
cd ~/Sites/presentation/mvc-basics/database/migrations/

# Delete the existing default template migrations
rm *

# Navigate to the top directory of your Laravel application
cd ~/Sites/presentation/mvc-basics

# Use the Laravel CLI toolset called "artisan" to create a migration file.
# The "make" command is just a helper. You could make any file by hand.
php artisan make:migration create_event_tickets_table