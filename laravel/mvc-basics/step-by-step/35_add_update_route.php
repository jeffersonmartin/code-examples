<?php
// ~/Sites/presentation/mvc-basics/routes/web.php
// Using your text editor, add the following to the bottom of the file.

Route::post('/event/tickets/{id}', [
    'uses' => 'EventTicketController@update',
    'as' => 'event.tickets.update',
    ]);