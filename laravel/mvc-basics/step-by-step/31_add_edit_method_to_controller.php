<?php
// ~/Sites/presentation/mvc-basics/app/Http/Controllers/EventTicketController.php
// Using your text editor, locate the edit() function and replace the `//` placeholder
// comment with the following code.

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