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
@section('page_title',$singular_object->singular_object_name)

@section('breadcrumbs')

    <li><a href="{{ route('admin.package_name.dashboard') }}">PACKAGE_NAME Management</a></li>
    <li><a href="{{ route('admin.package_name.plural_objects.index') }}">PLURAL_OBJECTS</a></li>
    <li><a href="{{ route('admin.package_name.plural_objects.show', ['id' => $singular_object->id]) }}">{{ $singular_object->singular_object_name }}</a></li>
    <li class="active">View SINGULAR_OBJECT</li>

@endsection

@section ('page_actions')

    <a class="btn btn-info" href="{{ route('admin.package_name.plural_objects.edit', ['id' => $singular_object->id]) }}">Edit SINGULAR_OBJECT</a>

    @if($singular_object->deleted_at == null)
        <a class="btn btn-danger" data-toggle="modal" href="#delete-modal">Delete SINGULAR_OBJECT</a>
    @endif

@endsection

@section('content')

    {{-- @todo: flash messages --}}

    {{-- Show RESTORE panel if record has been deleted --}}
    @if($singular_object->deleted_at != null)

        <div class="alert alert-warning alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h3 class="font-w300 push-15">Restore Deleted SINGULAR_OBJECT</h3>
            <div class="pull-left push-15-r">
                <form method="post" action="{{ route('admin.package_name.plural_objects.restore', ['id' => $singular_object->id]) }}">
                    {{ csrf_token() }}
                    <button type="submit" class="btn btn-warning">Restore Deleted SINGULAR_OBJECT</button>
                </form>
            </div>
            <p>This singular_object was deleted on {{ $singular_object->deleted_at }}. If you restore this singular_object, all child relationships will be restored as well. If you would like a new singular_object with the same name, you should create a new singular_object.</p>
        </div>

    @endif

    <div class="row">

        <div class="col-lg-3">
            @include('package_name::admin.plural_objects.nav')
        </div>

        <div class="col-lg-9">

            <div class="block">
                <div class="block-header">
                    <div class="block-options">
                        <code>{{ $singular_object->id }}</code>
                    </div>
                    <h3 class="block-title">SINGULAR_OBJECT Information</h3>
                </div>

                <div class="block-content form-horizontal">

                    <div class="row">

                        <div class="col-xs-7">
                            <div class="form-group">
                                <label class="col-xs-12">SINGULAR_OBJECT Name</label>
                                <div class="col-xs-12">
                                    <div class="form-control-static">
                                            {{ $singular_object->singular_object_name }}
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{--
                        <div class="col-xs-5">
                            <div class="form-group">
                                <label class="col-xs-12">SINGULAR_OBJECT Field</label>
                                <div class="col-xs-12">
                                    <div class="form-control-static">
                                        <a href="{{ route('admin.package_name.plural_objects.child_objects.show', ['id' => $singular_object->foreign_relationship_id]) }}">
                                            {{ $singular_object->singular_object_field }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        --}}

                    </div>

                    <div class="row">

                        <div class="col-xs-7">
                            <div class="form-group">
                                <label class="col-xs-12">Created By</label>
                                <div class="col-xs-12">
                                    <div class="form-control-static">{{-- $singular_object->created_by_user->user_full_name --}}</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-5">
                            <div class="form-group">
                                <label class="col-xs-12">Created At</label>
                                <div class="col-xs-12">
                                    <div class="form-control-static">{{ \Carbon\Carbon::parse($singular_object->created_at)->toDayDateTimeString() }}</div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-xs-7">
                            <div class="form-group">
                                <label class="col-xs-12">Updated By</label>
                                <div class="col-xs-12">
                                    <div class="form-control-static">{{-- $singular_object->updated_by_user->user_full_name --}}</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-5">
                            <div class="form-group">
                                <label class="col-xs-12">Updated At</label>
                                <div class="col-xs-12">
                                    <div class="form-control-static">{{ \Carbon\Carbon::parse($singular_object->updated_at)->toDayDateTimeString() }}</div>
                                </div>
                            </div>
                        </div>

                    </div>

                    @if($singular_object->deleted_at != null)

                        <div class="form-group">
                            <div class="col-xs-8">
                                <div class="form-material">
                                    <input class="form-control" type="text" id="deleted_by" name="deleted_by" placeholder="null" value="{{-- $singular_object->deleted_by_user->user_full_name --}}" readonly="readonly">
                                    <label for="deleted_by">Deleted By</label>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="form-material">
                                    <input class="form-control" type="text" id="deleted_at" name="deleted_at" placeholder="null" value="{{ $singular_object->deleted_at }}" readonly="readonly">
                                    <label for="deleted_at">Deleted On</label>
                                </div>
                            </div>
                        </div>

                    @endif

                </div>
            </div>

        </div>

    </div>{{-- row --}}

    <!-- Delete Modal -->
    <div class="modal" id="delete-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="block block-themed block-transparent remove-margin-b">
                    <div class="block-header bg-primary-dark">
                        <ul class="block-options">
                            <li>
                                <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                            </li>
                        </ul>
                        <h3 class="block-title">Delete SINGULAR_OBJECT</h3>
                    </div>
                    <div class="block-content">
                        <div class="row">

                            <div class="col-sm-6 border-r push-15">

                            {{--
                                <p>
                                    When consolidating plural_objects and you would like to delete this singular_object, you can migrate the child relationships to a different singular_object.
                                    <br /><br />
                                    It is <strong>strongly recommended</strong> to use the migration wizard prior to deleting a singular_object to preserve the child relationships.
                                    <br /><br />
                                </p>

                                <form class="form-horizontal" method="post" action="{{ route('admin.package_name.plural_objects.migrate', ['id' => $singular_object->id]) }}">
                                {{ csrf_token() }}

                                    <div class="form-group">
                                        <div class="col-sm-9">
                                            <div class="form-material">
                                                <select class="form-control" id="object_key_id" name="object_key_id" size="1">
                                                    <option>...</option>
                                                    @foreach($plural_objects as $singular_object_option)
                                                        <option value="{{ $singular_object_option->id }}">{{ $singular_object_option->singular_object_name }}</option>
                                                    @endforeach
                                                </select>
                                                <label for="object_key_id">Select New SINGULAR_OBJECT</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <button type="submit" class="btn btn-info">Migrate</button>
                                        </div>
                                    </div>

                                </form>
                            --}}

                            </div>

                            <div class="col-sm-6">

                                <p>
                                    When you delete a singular_object, any child relationships that are associated with this singular_object will also be deleted.
                                    <br /><br />
                                    After a singular_object is deleted, you can easily restore the deleted singular_object, including the child relationships.
                                    <br /><br />
                                </p>

                                <form class="form-horizontal" method="post" action="{{ route('admin.package_name.plural_objects.delete', ['id' => $singular_object->id]) }}">
                                {{ csrf_token() }}
                                {!! method_field('delete') !!}

                                    <div class="form-group">
                                        <div class="col-sm-9">
                                            <div class="form-material">
                                                <input class="form-control" type="text" id="singular_object_name" name="singular_object_name" placeholder="@todo: Please enter the category name to confirm">
                                                <label for="singular_object_name">SINGULAR_OBJECT Name</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Delete Modal -->

@endsection