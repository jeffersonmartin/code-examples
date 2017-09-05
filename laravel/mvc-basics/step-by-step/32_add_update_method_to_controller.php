<?php
// ~/Sites/presentation/mvc-basics/app/Http/Controllers/EventTicketController.php
// Using your text editor, add the following method (public function) below the
// existing edit() method.

public function update($id, Request $request)
{

    // Process the form post initiated from the edit form and define the
    // post values as new variables
    $ticketholder_name = $request->ticketholder_name;
    $ticket_price = $request->ticket_price;

    // Instantiate the EventTicket model based on the $id to update the existing row
    $ticket = EventTicket::findOrFail($id);

    // Define the columns for the table from the variables we created earlier.
    $ticket->ticketholder_name = $ticketholder_name;
    $ticket->ticket_price = $ticket_price;

    // Save the ticket values to the database using the built-in model method.
    $ticket->save();

    return redirect()->route('event.tickets.index');
}