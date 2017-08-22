{{--
Developers: Do a find and replace of the strings below, then delete this comment block.
For the examples below, we use are doing an event_categories table with the EventCategory object.

PACKAGE_NAME = Event
package_name = event

PLURAL_OBJECTS = Categories
SINGULAR_OBJECT = Category
plural_objects = categories
singular_object = category
object_key_id = event_category_id

You should also search for any @todo: and replace the Placeholders.

--}}

@extends('package_name::admin')
@section('page_title','PACKAGE_NAME PLURAL_OBJECTS')

@section('breadcrumbs')

    <li><a href="{{ route('admin.package_name.dashboard') }}">Event Management</a></li>
    <li><a href="{{ route('admin.package_name.plural_objects.index') }}">PLURAL_OBJECTS</a></li>
    <li class="active">List of PLURAL_OBJECTS</li>

@endsection

@section ('page_actions')

    <a href="{{ route('admin.package_name.plural_objects.create') }}" class="btn btn-info">Create SINGULAR_OBJECT</a>

@endsection

@section('content')

    {{-- @todo: flash messages --}}

    <div class="block">

        <div class="block-content">

            <!-- DataTables init on table by adding .js-dataTable-full-pagination class, functionality initialized in javascript section below -->
            <table class="table table-bordered table-striped js-dataTable-full-pagination">

                <thead>
                    <tr>
                        <th style="width: 20%;">&nbsp;</th>
                        <th style="width: 10%;">ID</th>
                        <th style="width: 30%;">SINGULAR_OBJECT Name</th>
                        <th style="width: 15%;">@todo: Placeholder</th>
                        <th style="width: 25%;">@todo: Placeholder</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($plural_objects as $singular_object)
                    <tr>
                        <td>
                            <div class="btn-group">

                                {{-- Show Info Button --}}
                                <a class="btn btn-default btn-sm" href="{{ route('admin.package_name.plural_objects.show', ['id' => $singular_object->id]) }}"><i class="icon-info22"></i></a>

                                {{-- Child Relationship Button --}}
                                {{-- @todo:
                                <a class="btn btn-default btn-sm" href="{{ route('admin.event.plural_objects.child_objects.index', ['object_key_id' => $singular_object->id]) }}">
                                    <i class="icon-tree7 icon-img"></i>
                                    {{ $singular_object->child_objects->count() }}
                                </a>
                                --}}

                            </div>
                        </td>
                        <td><code class="mr-5">{{ substr($singular_object->id, -6) }}</code></td>
                        <td>{{ $singular_object->singular_object_name }}</td>
                        <td>@todo: {{-- $singular_object->singular_object_field --}}</td>
                        <td>@todo: {{-- $singular_object->singular_object_field --}}</td>
                    </tr>
                    @endforeach

                </tbody>
            </table>

        </div>
    </div>

@endsection

@section('javascript')

    {{--
    Developer: The columns array below needs to match the number of columns in the table above.
    --}}

    var BaseTableDatatables = function() {

        // Init full extra DataTable, for more examples you can check out https://www.datatables.net/
        var initDataTableFullPagination = function() {
            jQuery('.js-dataTable-full-pagination').dataTable({
                pagingType: "full_numbers",
                columns: [
                    { orderable: false },
                    { orderable: true },
                    { orderable: true },
                    { orderable: true },
                    { orderable: true },
                ],
                pageLength: 10,
                lengthMenu: [[5, 10, 15, 20], [5, 10, 15, 20]]
            });
        };

        @include('event::admin.view_partials.js_bsdatatables')

        return {
            init: function() {
                // Init Datatables
                bsDataTables();
                initDataTableFullPagination();
            }
        };
    }();

    // Initialize when page loads
    jQuery(function(){ BaseTableDatatables.init(); });

@endsection
