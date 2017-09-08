# ______ Package for Laravel

The _____ package for Laravel is designed for -audience1-, -audience2-, and -audience3- to manage their -purpose-. This package includes an Admin UI views and Laravel repositories for easily accessing data in a custom front-end Web UI.

This code was written to solve -COMPANY NAME- use case, however this can easily be adapted for most needs.

## Features

### Package Components

* **Config** - Static variables for package configuration
* **Contracts** - Interfaces for each repository
* **Controllers/Api** - (Placeholder for Future)
* **Controllers/Http** - Controllers for Admin UI Views
* **Jobs** - (Placeholder for Future)
* **Libraries** - Core files for package extensibility
* **Migrations** - Version controlled database schema builder
* **Models** - Models for database tables
* **Repositories** - Comprehensive business logic for all package functionality
* **Routes** - Routes for API and HTTP Controllers
* **Seeds** - Database population with base and demo data
* **Views** - Views for Admin UI. Easily extensible for front-end UI.
* **-PackageName-ServiceProvider** - Used for integrating package with Laravel application.

### Data Schema

> This is an example based on a previously created Event package

* **Event Categories** - Categories are used for providing a hierarchy of your sessions with different types of events (ex. instructor-led classroom training, online training, on-site dedicated event).
* **Event Instructors** - Instructors are the employees or contractors that are responsible for delivering the presentation(s) in your session. Each instructor is associated with a parent Organizer. Instructors can be associated with multiple Regions and multiple Categories so they only appear in the dropdown menus for the appropriate Sessions.
* **Event Invitations** - Invitations are used for 1) inviting attendees to attend an event but who haven't paid for a ticket yet, and 2) creating a private invitation to join an event at a non-standard pricelevel. When an invitation is created, it counts against an available seat for the session, and is tracked in the `count_tickets_invited` column. When an invitation is accepted, the Event Ticket is updated from `flag_is_invited` to `flag_is_confirmed`. When finalizing a session before it starts, you can easily see which invited attendees have accepted the invitation.
* **Event Notifications** - Event Notifications are email templates used by a variety of objects. A separate many-to-many table exists for each object that uses notifications to track when notifications were sent.
* **Event Organizers** - Event Organizers are for storing the meta data for the organization primarily responsible for each session.
* **Event Pricetiers** - Pricetiers (words combined for database nomenclature) are templates for pricing levels that can be added to each session or template. For example, you can have different pricetier for customers, discounted partners and free employees.
* **Event Regions** - Regions are similar to categories in that they provide a hierarchy for sessions with different geographic locations. Regions are predominantly used for calendar filtering and for reporting session metrics by region.
* **Event Sessions** - A session is "an event" that has specified dates, pricetiers, instructors, tickets, etc. This is the bread-and-butter of the package. Each event session has auto-calculated costs, revenue and margin along with targets for financial decision making.
* **Event Sessions Instructors** - Many-to-many table for associating instructors with a session. You'll usually only have one instructor, however you can have more than one if you choose.
* **Event Sessions Invitations** - Many-to-many table for associating invitations with a session.
* **Event Sessions Organizers** - Many-to-many table for associating organizers with a session. You'll usually only have one organizer, however you can have more than one if you choose.
* **Event Sessions Pricetiers** - Many-to-many table for associating pricetiers with a session.
* **Event Sessions Seats** - Many-to-many table for associating session seats with venue seats, and corresponding event tickets.
* **Event Sessions Sponsors** - Many-to-many table for optionally associating sponsors with a session.
* **Event Sponsors** - Event Sponsors are for storing the meta data for a sponsor. This is designed for associating 3rd party costs or revenue contributions (sponsorship) that are calculated into the session revenue, costs and margin.
* **Event Templates** - Event Templates allow you to pre-design event sessions and create sessions from templates.
* **Event Templates Instructors** - Many-to-many table for associating instructors with a session template.
* **Event Templates Invitations** - Many-to-many table for associating invitations with a session.
* **Event Templates Organizers** - Many-to-many table for associating organizers with a session. You'll usually only have one organizer, however you can have more than one if you choose.
* **Event Templates Pricetiers** - Many-to-many table for associating pricetiers with a session.
* **Event Templates Sponsors** - Many-to-many table for optionally associating sponsors with a session.
* **Event Tickets** - Event Tickets are "attendees" associated with a specific session. Each ticket has a sales price, credit price, auto-calculated cost and margin, and flags for the status. A ticket can be associated with an organization, department, team, user, sales order, credit order and includes a copy of the ticketholder's contact information for reference.
* **Event Transactions** - Event Transactions are the log of transactions involved sessions and tickets and is available for auditing financial transactions and any status changes to sessions and tickets.
* **Event Venues** - Event Venues are for storing the meta data for each location that you have sessions scheduled at.
* **Event Venue Seats** - Event Venue Seat records are created for each physical seat in a facility that an attendee can buy a ticket for. The Event Venue Seats is mapped to Event Sessions Seats for each session.

---

## Using Package Scaffolding

There are a variety of template files that you can copy and paste. At the top of the file, you'll a comment block with instructions for finding and replacing various strings.

---

## Production Installation

> If you want to use the package as-is, use the following steps to install the
package with composer and add the Service Provider to your application config.

### Add Package to Composer File

> All of these tasks are performed in your Laravel application.

1. Open your `composer.json` file and add the package to the following sections.

        "require": {
            "php": ">=5.6.4",
            "laravel/framework": "5.4.*",
            "laravel/tinker": "~1.0",
            "-githubaccount-/-packagename-": "dev-develop"
        },

        "repositories": [
            {
                "type": "vcs",
                "url": "https://github.com/-githubaccount-/-packagename-"
            }
        ],

### Generate a GitHub Personal Access Token.

Since this is a private repository, we'll need to generate a GitHub Personal Access Token (similar to OAuth token) to access the repository during a `composer install` without entering credentials.

> If you have used other packages from `-githubaccount-` before, you may be able to skip this step.

[https://gist.github.com/jeffersonmartin/d0d4a8dfec90d224d14f250b36c74d2f](https://gist.github.com/jeffersonmartin/d0d4a8dfec90d224d14f250b36c74d2f)

### Run Composer Install

        #  cd ~/Sites/mypath/myapp
        [~/Sites/mypath/myapp]#  composer install

        (You may need to triage error messages, if any)


### Update Application Config to add -PackageName-ServiceProvider

Update your Laravel application configuration to include the -PACKAGE-ServiceProvider so your application registers all of the package components. Add the following line at the end of the Package Service Providers section.

        -GithubAccount-\-Packagename-\-PackageName-ServiceProvider::class,

Use your favorite text editor to open the following file.

        [~/Sites/mypath/myapp/config/app.php]

        'providers' => [

            ...

            /*
             * Package Service Providers...
             */
            Laravel\Tinker\TinkerServiceProvider::class,
            -GithubAccount-\-PackageName-\-PackageName-ServiceProvider::class,

            ...

        ]

### Update Application Database Seeder to Include Package Seeds

Update your Laravel application database seeder to include the package seeds. There is a base seed that provides the essential database rows, and a demo data one that can be used for evaluating the capabilities of the package.

Use your favorite text editor to add the installation data and optionally the demo data line to the `run()` function. If you have any existing seeds, add these lines below.

        [~/Sites/mypath/myapp/database/seeds/DatabaseSeeder.php]

        public function run()
        {

            ...

            // Initial Installation Data
            $this->call(-GithubAccount-\-PackageName-\Seeds\-PackageName-PackageSeed::class);

            // Demo Data
            $this->call(-GithubAccount-\-PackageName-\Seeds\-PackageName-PackageSeedDemo::class);
        }

### Run the Database Migrations and Seeds

        [~/Sites/mypath/myapp]# php artisan migrate
        [~/Sites/mypath/myapp]# php artisan db:seed

### Serve your Application and Test Admin UI

        [~/Sites/mypath/myapp]# php artisan serve
        Laravel development server started: <http://127.0.0.1:8000>

Open a web browser and access the Event dashboard.

        http://127.0.0.1:8000/admin/event

If the page loads, your package is now ready to be edited in real time with simple page refreshes. If not, triage based on the error messages.

---

## Development Installation

> If you want to customize this package, use the following steps to symlink the
package into your new or existing Laravel application. Any changes that you make
to the package will appear in real time without needing to commit your changes.

### Clone Package to Local Machine

Use GitHub Desktop or Terminal to clone a copy of the package to your local development directory.

        #  cd ~/Sites
        [~/Sites]#  mkdir -p -githubaccount-
        [~/Sites]#  cd -githubaccount-
        [~/Sites/-githubaccount-]#  git clone https://github.com/-githubaccount-/-packagename-
        GitHub Username: (your username)
        GitHub Password: (your password)

        [~/Sites/-githubaccount-]#  cd -packagename-
        [~/Sites/-githubaccount-/-packagename-]#  ls

### Create Symlink to Package in Your Application

Create a symlink from the cloned package directory to a newly created packages directory in your Laravel application.

        #  cd ~/Sites/mypath/myapp
        (This should be the root directory of your Laravel application)

        [~/Sites/mypath/myapp]#  mkdir packages
        [~/Sites/mypath/myapp]#  cd packages
        [~/Sites/mypath/myapp/packages]#  mkdir -githubaccount-
        [~/Sites/mypath/myapp/packages]#  cd -githubaccount-
        [~/Sites/mypath/myapp/packages/-githubaccount-]#  ln -s ~/Sites/-githubaccount-/-packagename- .
        [~/Sites/mypath/myapp/packages/-githubaccount-]#  cd -packagename-
        [~/Sites/mypath/myapp/packages/-githubaccount-/-packagename-]#  ls

### Update Composer File to Autoload Package

Update your Laravel application composer file to include the -GithubAccount-\-PackageName- namespace so your application registers all of the package components. Add the following line to the `psr-4` section of your Composer autoload section.

        "-GithubAccount-\\-PackageName-\\": "packages/-githubaccount-/-packagename-/src"

Use your favorite text editor to open the following file.

        [~/Sites/mypath/myapp/composer.json]

        "autoload": {
            "classmap": [
                "database"
            ],
            "psr-4": {
                "App\\": "app/",
                "-GithubAccount-\\-PackageName-\\": "packages/-githubaccount-/-packagename-/src"
            }
        },

### Update Application Config to add -PackageName-ServiceProvider

Update your Laravel application configuration to include the -PackageName-ServiceProvider so your application registers all of the package components. Add the following line at the end of the Package Service Providers section.

        -GithubAccount-\-PackageName-\-PackageName-ServiceProvider::class,

Use your favorite text editor to open the following file.

        [~/Sites/mypath/myapp/config/app.php]

        'providers' => [

            ...

            /*
             * Package Service Providers...
             */
            Laravel\Tinker\TinkerServiceProvider::class,
            -GithubAccount-\-PackageName-\-PackageName-ServiceProvider::class,

            ...

        ]

### Update Application Database Seeder to Include Package Seeds

Update your Laravel application database seeder to include the package seeds. There is a base seed that provides the essential database rows, and a demo data one that can be used for evaluating the capabilities of the package.

Use your favorite text editor to add the installation data and optionally the demo data line to the `run()` function. If you have any existing seeds, add these lines below.

        [~/Sites/mypath/myapp/database/seeds/DatabaseSeeder.php]

        public function run()
        {

            ...

            // Initial Installation Data
            $this->call(-GithubAccount-\-PackageName-\Seeds\-PackageName-PackageSeed::class);

            // Demo Data
            $this->call(-GithubAccount-\-PackageName-\Seeds\-PackageName-PackageSeedDemo::class);
        }

### Update Composer Autoload

        cd ~/Sites/mypath/myapp

        [~/Sites/mypath/myapp]# composer dump-autoload

### Run the Database Migrations and Seeds

        [~/Sites/mypath/myapp]# php artisan migrate
        [~/Sites/mypath/myapp]# php artisan db:seed

### Serve your Application and Test Admin UI

        [~/Sites/mypath/myapp]# php artisan serve
        Laravel development server started: <http://127.0.0.1:8000>

Open a web browser and access the Event dashboard.

        http://127.0.0.1:8000/admin/-packagename-

If the page loads, your package is now ready to be edited in real time with simple page refreshes. If not, triage based on the error messages.
