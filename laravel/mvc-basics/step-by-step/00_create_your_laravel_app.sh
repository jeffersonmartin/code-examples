#!/bin/bash
# Run the following commands to install Laravel using Composer.

# Navigate to your sites directory and make a new subdirectory called presentation
cd ~/Sites
mkdir presentation
cd presentation

# Replace the {folder-name} with the desired project name
# composer create-project --prefer-dist laravel/laravel {folder-name}
composer create-project --prefer-dist laravel/laravel mvc-basics

# Wait a few minutes for a fresh copy of Laravel's application framework to be installed.
cd mvc-basics
ls