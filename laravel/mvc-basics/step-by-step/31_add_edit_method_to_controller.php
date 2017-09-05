<?php
// ~/Sites/presentation/mvc-basics/app/Http/Controllers/EventTicketController.php
// Using your text editor, add the following method (public function) below the
// existing store() method.

public function edit($id)
{
    // Get record by ID passed in from route
    $ticket = EventTicket::findOrFail($id);

    // Return page with ticket values and passing in the ticket variable
    // that includes the object array.
    return view('event.tickets.edit', compact([
        'ticket'
        ]));
}