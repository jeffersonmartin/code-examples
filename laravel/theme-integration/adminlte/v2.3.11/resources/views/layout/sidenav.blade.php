<ul class="sidebar-menu">
  <li class="header">MAIN NAVIGATION</li>
  <li>
    <a href="{{-- route('dashboard') --}}">
      <i class="fa fa-dashboard"></i> <span>Dashboard</span>
    </a>
  </li>
  <li class="treeview">
    <a href="#">
      <i class="fa fa-dashboard"></i> <span>Settings</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="{{-- route('settings.page1') --}}"><i class="fa fa-circle-o"></i> Page Name 1</a></li>
      <li><a href="{{-- route('settings.page2') --}}"><i class="fa fa-circle-o"></i> Page Name 2</a></li>
    </ul>
  </li>

</ul>