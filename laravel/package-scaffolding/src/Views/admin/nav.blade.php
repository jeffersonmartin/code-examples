<ul class="nav nav-tabs nav-tabs-alt">
    <li class="{{ Request::is('admin/-package-') ? 'active' : '' }}">
        <a href="{{ route('admin.-package-.dashboard') }}">Dashboard</a>
    </li>
    {{--
    <li class="{{ Request::is('admin/-package-/-pluralobjects-*') ? 'active' : '' }}">
        <a href="{{ route('admin.-package-.-pluralobjects-.index') }}">-PLURALOBJECTS-</a>
    </li>
    --}}

</ul>