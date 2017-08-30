#!/bin/bash
# Similar to running migrations, we'll need to run the database seeds. You can
# run seeds during a migration by adding `--seed` to any artisan migrate command.

# Navigate to the top directory of your Laravel application
cd ~/Sites/presentation/mvc-basics

# Use artisan to run the database seeder. Any seeds listed in the seeder will run
# that are listed in `database/seeds/DatabaseSeeder.php`.
php artisan db:seed

# If you want to get a clean copy of your database, plus the seed demo data, you
# can use the following command to destroy all tables and rebuild them. You should
# NEVER run this in production environments since it will result in data loss.
# However, this is helpful for getting a predictable database schema during
# development and if you change your existing migration files.
# php artisan migrate:refresh --seed

# You can use the following command to only run migrations for changes
# and additions
# php artisan migrate --seed
