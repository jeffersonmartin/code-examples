<?php
// ~/Sites/presentation/mvc-basics/routes/web.php
// Using your text editor, add the following to the bottom of the file. You'll
// notice that the store method uses "post" instead of "get".

Route::post('/event/tickets', [
    'uses' => 'EventTicketController@store',
    'as' => 'event.tickets.store',
    ]);