<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EventTicket;

class EventTicketController extends Controller
{
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

    public function create()
    {
        // Return page with form for creating a new ticket
        return view('event.tickets.create');
    }

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

    public function delete($id)
    {
        // Instantiate the EventTicket model based on the $id to update the existing row
        $ticket = EventTicket::findOrFail($id);

        // Delete the ticket row from the database using the built-in model method.
        $ticket->delete();

        return redirect()->route('event.tickets.index');
    }

}
