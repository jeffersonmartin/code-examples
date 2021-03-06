<?php
// ~/Sites/presentation/mvc-basics/resources/views/event/tickets/create.blade.php
// Using your text editor, create the `create.blade.php` file and paste the
// following code.

<html>
<head>
    <title>Create Event Ticket</title>
</head>
<body>

    <form class="form-horizontal" method="post" action="{{ route('event.tickets.store') }}">
    {{ csrf_field() }}

        <div class="form-group">
            <label for="ticketholder_name" class="col-sm-3 control-label">Ticketholder Name</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="ticketholder_name" />
            </div>
        </div>

        <div class="form-group">
            <label for="ticket_price" class="col-sm-3 control-label">Ticket Price</label>
            <div class="col-sm-9">
                $ <input type="text" class="form-control" name="ticket_price" style="width: 150px; display: inline;" />
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-9 col-offset-sm-3">
                <button type="submit" class="btn btn-primary">Save Ticket</button>
                <a href="{{ route('event.tickets.index') }}">Cancel</a>
            </div>
        </div>

    </form>

</body>
</html>