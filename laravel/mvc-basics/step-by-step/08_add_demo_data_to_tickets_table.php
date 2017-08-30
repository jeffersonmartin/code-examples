<?php
// ~/Sites/presentation/mvc-basics/database/seeds/EventTicketDemoSeed.php
// Using your text editor, add the use statement for the `App\EventTicket` model
// at the bottom of the existing use statements (above the class). Then paste the
// code below into the run() method to replace the existing `//` placeholder.
// Note: This example has been over simplified for the sake of time in this demo,
// and you should use model factories when creating real seeds.

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
