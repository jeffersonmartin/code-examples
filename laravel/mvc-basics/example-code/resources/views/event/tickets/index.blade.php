
<html>
<head>
    <title>List of Event Tickets</title>
</head>
<body>

    <a class="btn btn-primary" href="{{ route('event.tickets.create') }}">Create Ticket</a>

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
                    <a href="{{ route('event.tickets.edit', ['id' => $ticket->id]) }}">Edit</a>
                    <form method="post" action="{{ route('event.tickets.delete', ['id' => $ticket->id]) }}">
                        {{ csrf_field() }}
                        {!! method_field('delete') !!}
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>

        @endforeach

        </tbody>
    </table>

</body>
</html>