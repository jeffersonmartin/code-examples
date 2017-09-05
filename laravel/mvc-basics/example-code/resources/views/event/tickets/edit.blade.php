<html>
<head>
    <title>Edit Event Ticket</title>
</head>
<body>

    <form method="post" action="{{ route('event.tickets.update', ['id' => $ticket->id]) }}">
    {{ csrf_field() }}

        <div class="form-group">
            <div class="col-sm-3">
                Ticketholder ID
            </div>
            <div class="col-sm-9">
                <code>{{ $ticket->id }}</code>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-3">
                Ticketholder Name
            </div>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="ticketholder_name" value="{{ $ticket->ticketholder_name }}" />
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-3">
                Ticket Price
            </div>
            <div class="col-sm-9">
                $ <input type="text" class="form-control" name="ticket_price" style="width: 150px;"  value="{{ $ticket->ticket_price }}"/>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-9 col-offset-sm-3">
                <button type="submit" class="btn btn-primary">Update Ticket</button>
                <a href="{{ route('event.tickets.index') }}">Cancel</a>
            </div>
        </div>

    </form>

</body>
</html>