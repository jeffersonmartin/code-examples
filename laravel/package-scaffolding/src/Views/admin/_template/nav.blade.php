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

<div class="list-group">
    <a class="list-group-item {{ Request::route()->getName() == 'admin.package_name.plural_objects.show' ? 'active' : '' }}" href="{{ route('admin.package_name.plural_objects.show', ['id' => $singular_object->id]) }}">
        <i class="icon-info22 fa-fw"></i>
        SINGULAR_OBJECT Information
    </a>
    <a class="list-group-item {{ Request::route()->getName() == 'admin.package_name.plural_objects.child_objects.index' ? 'active' : '' }}" href="{{ route('admin.package_name.plural_objects.child_objects.index', ['object_key_id' => $singular_object->id]) }}">
        <span class="badge">{{ $singular_object->child_objects->count() }}</span>
        <i class="icon-tree7 fa-fw"></i>
        @todo: Child Objects
    </a>
</div>

{{--
<div class="list-group">
    <a class="list-group-item" href="#">
        {Placeholder for Modules}
    </a>
</div>
--}}