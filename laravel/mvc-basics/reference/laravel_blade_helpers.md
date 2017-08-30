# Laravel Blade Helpers

When working with Views, remember that a view is a static HTML file that has some special placeholders (variables) for data that you pass in. The view itself doesn't have any database queries or fancy PHP logic.

The following list gives you an idea of what PHP is allowed in a View in regards to data.

| PHP Code                               | Laravel Blade Helpers               |
|----------------------------------------|-------------------------------------|
| `<?php echo $variable; ?>`             | `{{ $variable }}`                   |
| `foreach($records as $record) {`       | `@foreach($records as $record)`     |
| `}`                                    | `@endforeach`                       |
| `if($variable == 'value1') {`          | `@if($variable == 'value1')`        |
| `} elseif($variable == 'value2') {`    | `@elseif($variable == 'value2')`    |
| `} else {`                             | `@else`                             |
| `}`                                    | `@endif`                            |
| `$variable=='value' ? 'true' : 'false'`| `{{ $variable=='value' ? 'true' : 'false' }}` |
| `<?php /* comment */ ?>`               | `{{-- comment --}}`                 |