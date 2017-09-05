<?php

use Illuminate\Database\Seeder;
use App\EventTicket;

class EventTicketDemoSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Instantiate model for creating a new ticket
        $first_ticket = new EventTicket;

        // Specify the new ticket's column values
        $first_ticket->ticketholder_name = 'Dade Murphy';
        $first_ticket->ticket_price = '1507.00';

        // Save the ticket values to the database using Laravel's ORM.
        $first_ticket->save();

        // Create a second ticket without the comments
        $second_ticket = new EventTicket;
        $second_ticket->ticketholder_name = 'Kate Libby';
        $second_ticket->ticket_price = '1995.00';
        $second_ticket->save();
    }
}
