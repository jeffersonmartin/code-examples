<?php
// ~/Sites/presentation/mvc-basics/resources/views/event/tickets/index.blade.php
// Using your text editor, edit the `index.blade.php` file and add the <form> section
// and a new delete button.

<tr>
    <td>{{ $ticket->id }}</td>
    <td>{{ $ticket->ticketholder_name }}</td>
    <td>{{ $ticket->ticket_price }}</td>
    <td>
        <form method="post" action="{{ route('event.tickets.delete', ['id' => $ticket->id]) }}">
            {{ csrf_field() }}
            {!! method_field('delete') !!}

            <div class"btn-group">
                <a class="btn btn-info" href="{{ route('event.tickets.edit', ['id' => $ticket->id]) }}">Edit</a>
                <button type="submit" class="btn btn-danger">Delete</button>
            </div>

        </form>
    </td>
</tr>