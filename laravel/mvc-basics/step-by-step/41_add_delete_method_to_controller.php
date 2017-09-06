<?php
// ~/Sites/presentation/mvc-basics/app/Http/Controllers/EventTicketController.php
// Using your text editor, locate the destroy() function and replace the `//` placeholder
// comment with the following code.

public function destroy($id)
{
    // Instantiate the EventTicket model based on the $id to update the existing row
    $ticket = EventTicket::findOrFail($id);

    // Delete the ticket row from the database using the built-in model method.
    $ticket->delete();

    return redirect()->route('event.tickets.index');
}