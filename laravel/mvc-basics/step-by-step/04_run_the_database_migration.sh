#!/bin/bash
# Run the following commands to run the database migration. The Laravel artisan
# toolset will automagically determine which migration files have not been run.

# Navigate to the top directory of your Laravel application
cd ~/Sites/presentation/mvc-basics

# You can review the migrations before they've run using the following command
php artisan migrate:status

# Use artisan to run your database migrations
php artisan migrate

# You can review the migrations after they've run using the following command
php artisan migrate:status

# You can now use Sequel Pro (Mac) or your favorite SQL editor to refresh the
# mvc_basics database and see the newly created `event_tickets` table.
