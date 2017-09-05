<?php
// ~/Sites/presentation/mvc-basics/resources/views/event/tickets/index.blade.php
// Using your text editor, edit the `index.blade.php` file and replace the placeholder
// cell with a link to edit the ticket.

<tr>
    <td>{{ $ticket->id }}</td>
    <td>{{ $ticket->ticketholder_name }}</td>
    <td>{{ $ticket->ticket_price }}</td>
    <td>
        <a href="{{ route('event.tickets.edit', ['id' => $ticket->id]) }}">Edit</a>
    </td>
</tr>