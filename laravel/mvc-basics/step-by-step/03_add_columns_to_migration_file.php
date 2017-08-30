<?php
// ~/Sites/presentation/mvc-basics/database/migrations/YYYY_MM_DD_HHIISS_create_event_tickets_table.php
// Use your text editor to edit the migration file and add the following code in the `up` method to replace
// the placeholder `//` comment. Documentation on other column types is available on the Laravel website.
//

public function up()
    {
        // Table columns
        $table->increments('id');
        $table->string('ticketholder_name')->nullable();
        $table->decimal('ticket_price', 10, 2)->default(0.00);
        $table->timestamps();
    }