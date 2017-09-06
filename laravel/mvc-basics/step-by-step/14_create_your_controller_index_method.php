<?php
// ~/Sites/presentation/mvc-basics/app/Http/Controllers/EventTicketController.php
// Using your text editor, locate the index() function and replace the `//` placeholder
// comment with the following code.

public function index()
{
    // Get all of the records from the table and return as an object array
    // that we can loop through in our view file
    $tickets = EventTicket::get();

    // Return page with table of tickets and passing in the tickets variable
    // that includes the object array of tickets. You don't need to worry
    // about the theory of the compact method, only to make sure that any
    // variables that you define above that you want to pass into the view
    // are included in the compact array (comma separated).
    return view('event.tickets.index', compact([
        'tickets'
        ]));
}