<?php
// ~/Sites/presentation/mvc-basics/routes/web.php
// Using your text editor, add the following to the bottom of the file.

Route::get('/event/tickets', [ // If the URL matches this
    'uses' => 'EventTicketController@index', // Load this controller class name and execute this method (function) name
    'as' => 'event.tickets.index', // We'll also define an internal name for linking to this route
    ]);

Route::get('/event/tickets/create', [
    'uses' => 'EventTicketController@create',
    'as' => 'event.tickets.create',
    ]);

Route::post('/event/tickets', [
    'uses' => 'EventTicketController@store',
    'as' => 'event.tickets.store',
    ]);

Route::get('/event/tickets/{id}/edit', [
    'uses' => 'EventTicketController@edit',
    'as' => 'event.tickets.edit',
    ]);

Route::post('/event/tickets/{id}', [
    'uses' => 'EventTicketController@update',
    'as' => 'event.tickets.update',
    ]);

Route::delete('/event/tickets/{id}', [
    'uses' => 'EventTicketController@destroy',
    'as' => 'event.tickets.delete',
    ]);