<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{asset('backend/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p> {{auth()->user()->name}}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
          </button>
        </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>

      <li>
        <a href="../widgets.html">
          <i class="fa fa-th"></i> <span>Dashboard</span>
          <span class="pull-right-container">
          </span>
        </a>
      </li>

      @if(auth()->user()->role=='Admin')

      <li class="treeview">
        <a href="#">
          <i class="fa fa-share"></i> <span>Blog</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-circle-o"></i> Posts </a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i> Categories </a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i> Tags </a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-share"></i> <span>Real Estate</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{URL::to('/properti')}}"><i class="fa fa-circle-o"></i> Properties </a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i> Features </a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i> Facilities </a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i> Categories </a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i> Types </a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i> Reviews </a></li>
        </ul>
      </li>

      <li>
        <a href="../widgets.html">
          <i class="fa fa-th"></i> <span>Testimonials</span>
          <span class="pull-right-container">
            <small class="label pull-right bg-green">Hot</small>
          </span>
        </a>
      </li>

      <li>
        <a href="/agents">
          <i class="fa fa-th"></i> <span>Agents</span>
          <span class="pull-right-container">
            <small class="label pull-right bg-green">Hot</small>
          </span>
        </a>
      </li>
      @endif

      <li class="header">LABELS</li>
      <li>
        <a href="{{URL::to('/users')}}">
          <i class="fa fa-th"></i> <span>Users</span>
          <span class="pull-right-container">
            <small class="label pull-right bg-green">Hot</small>
          </span>
        </a>
      </li>

      <li>
        <a href="../widgets.html">
          <i class="fa fa-th"></i> <span>Reports</span>
          <span class="pull-right-container">
            <small class="label pull-right bg-green">Hot</small>
          </span>
        </a>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>