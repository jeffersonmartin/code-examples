#!/bin/bash
#
# Clone the code-examples repository to your local machine (if you haven't already)
cd ~/Sites/presentation
git clone https://github.com/jeffersonmartin/code-examples

cd ~/Sites/presentation/code-examples/laravel/theme-integration/adminlte/v2.3.11

# Copy the Admin LTE theme assets into our application
cp -r public ~/Sites/presentation/mvc-basics/public

# Copy the Admin LTE page layouts into our application
cp -r resources ~/Sites/presentation/mvc-basics/resources
