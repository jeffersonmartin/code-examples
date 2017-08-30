<?php
// ~/Sites/presentation/mvc-basics/routes/web.php
// Using your text editor, add the following to the bottom of the file.

Route::get('/event/tickets', [ // If the URL matches this
    'uses' => 'EventTicketController@index' // Load this controller class name and execute this method (function) name
    'as' => 'event.tickets.index', // We'll also define an internal name for linking to this route
    ]);