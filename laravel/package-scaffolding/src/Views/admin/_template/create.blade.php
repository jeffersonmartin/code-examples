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
@section('page_title','Create PACKAGE_NAME SINGULAR_OBJECT')

@section('breadcrumbs')

    <li><a href="{{ route('admin.package_name.dashboard') }}">PACKAGE_NAME Management</a></li>
    <li><a href="{{ route('admin.package_name.plural_objects.index') }}">PLURAL_OBJECTS</a></li>
    <li class="active">Create SINGULAR_OBJECT</li>

@endsection

@section ('page_actions')

    {{-- Placeholder for buttons --}}

@endsection

@section('content')

    {{-- @todo: flash messages --}}

    <form method="post" action="{{ route('admin.package_name.plural_objects.store') }}">
    {{ csrf_token() }}

    <div class="row">

        <div class="col-sm-6">

            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">SINGULAR_OBJECT Information</h3>
                </div>
                <div class="block-content form-horizontal">

                    {{--
                    @todo: copy and paste this block for any select dropdowns, then remove these lines
                    FOREIGN_RELATIONSHIP_NAME = Event Type
                    foreign_relationship_name = event type
                    foreign_relationship_id = event_type_id
                    $foreign_relationships = $event_types
                    $relationship = $type

                    <div class="form-group">
                        <label class="control-label col-sm-3"><strong>FOREIGN_RELATIONSHIP_NAME</strong></label>
                        <div class="col-sm-8">
                            <select name="foreign_relationship_id" class="form-control">

                                @foreach($foreign_relationships as $relationship)

                                    @if($request->foreign_relationship_id == $relationship->id)
                                        <option selected="selected" value="{{ $relationship->id }}">{{ $relationship->relationship_name }}</option>
                                    @else
                                        <option value="{{ $relationship->id }}">{{ $relationship->relationship_name }}</option>
                                    @endif

                                @endforeach

                            </select>
                            <p class="help-block">Select the foreign_relationship_name that this singular_object belongs to.</p>
                        </div>
                    </div>
                    --}}

                    <div class="form-group">
                        <label class="control-label col-sm-3"><strong>SINGULAR_OBJECT Name</strong></label>
                        <div class="col-sm-8">
                            <input type="text" name="singular_object_name" class="form-control" />
                            <p class="help-block">
                                Enter a descriptive name for your singular_object.
                            </p>
                        </div>
                    </div>

                    {{--
                    @todo: copy and paste this block for any input fields, then remove this line

                    <div class="form-group">
                        <label class="control-label col-sm-3"><strong>SINGULAR_OBJECT Field</strong></label>
                        <div class="col-sm-8">
                            <input type="text" name="singular_object_field" class="form-control" />
                            <p class="help-block">
                                This is some helpful text to help users type the right thing.<br />
                                <span class="text-danger">This is some colorful attention text.</span>
                            </p>
                        </div>
                    </div>
                    --}}

                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" class="btn btn-success push-5-r">Save SINGULAR_OBJECT</button>
                            <a class="btn btn-default" href="{{ route('admin.package_name.plural_objects.index') }}">Cancel</a>
                        </div>
                    </div>

                </div>
            </div>

            </form>

        </div>

        <div class="col-sm-6">

            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Documentation Reference</h3>
                </div>
                <div class="block-content">

                    <h4 class="font-w300 push">@todo: Placeholder Section Title</h4>
                    <p>
                        @todo: Placeholder paragraph
                    </p>

                </div>
            </div>

        </div>

    </div>

    </form>

@endsection


