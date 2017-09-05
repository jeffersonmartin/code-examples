<?php
// ~/Sites/presentation/mvc-basics/app/Http/Controllers/EventTicketController.php
// Using your text editor, add the following method (public function) below the
// existing index() method.

public function create()
{
    // Return page with form for creating a new ticket
    return view('event.tickets.create');
}