<?php
// ~/Sites/presentation/mvc-basics/app/Http/Controllers/EventTicketController.php
// Using your text editor, add the following method (public function) below the
// existing create() method.

public function store(Request $request)
{
    // Process the form post initiated from the create form and define the
    // post values as new variables
    $ticketholder_name = $request->ticketholder_name;
    $ticket_price = $request->ticket_price;

    // Instantiate the EventTicket model for creating a new row in the database
    $ticket = new EventTicket;

    // Define the columns for the table from the variables we created earlier.
    $ticket->ticketholder_name = $ticketholder_name;
    $ticket->ticket_price = $ticket_price;

    // Save the ticket values to the database using the built-in model method.
    $ticket->save();

    return redirect()->route('event.tickets.index');
}

// CHALLENGE: Do you see how you could refactor the code above? Hint: Could
// we define the model columns using the request values without the intermediary
// variable that we defined?