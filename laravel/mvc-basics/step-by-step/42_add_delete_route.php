<?php
// ~/Sites/presentation/mvc-basics/routes/web.php
// Using your text editor, add the following to the bottom of the file.

Route::delete('/event/tickets/{id}', [
    'uses' => 'EventTicketController@delete',
    'as' => 'event.tickets.delete',
    ]);