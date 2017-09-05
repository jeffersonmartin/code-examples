<?php
// ~/Sites/presentation/mvc-basics/resources/views/event/tickets/index.blade.php
// Using your text editor, modify the existing index.blade.php file and add a new
// link button above the table.

<body>

    {{-- Create Ticket Button --}}
    <a class="btn btn-primary" href="{{ route('event.tickets.create') }}">Create Ticket</a>

    <table>
