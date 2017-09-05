<?php
// ~/Sites/presentation/mvc-basics/routes/web.php
// Using your text editor, add the following to the bottom of the file.

Route::get('/event/tickets/create', [
    'uses' => 'EventTicketController@create',
    'as' => 'event.tickets.create',
    ]);