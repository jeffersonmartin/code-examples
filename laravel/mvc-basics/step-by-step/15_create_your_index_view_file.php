<?php
// ~/Sites/presentation/mvc-basics/resources/views/event/tickets/index.blade.php
// Using your text editor, create the `event/tickets/` folder structure in the
// `resources` directory. Then create an `index.blade.php` file and paste the
// following code. Using file includes and themes is outside the scope of this
// example.

<html>
<head>
    <title>List of Event Tickets</title>
</head>
<body>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Ticketholder Name</th>
                <th>Ticket Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>

        {{-- Loop through tickets --}}
        @foreach($tickets as $ticket)

            <tr>
                <td>{{ $ticket->id }}</td>
                <td>{{ $ticket->ticketholder_name }}</td>
                <td>{{ $ticket->ticket_price }}</td>
                <td>
                    {{-- Placeholder --}}
                </td>
            </tr>

        @endforeach

        </tbody>
    </table>

</body>
</html>