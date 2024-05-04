<div class="col-md-3 left_col">
      <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
          <a href="{{Route('admin-dashboard')}}" class="site_title"><i class="fa fa-paw"></i> <span>{{ config('app.name', 'candy-tour') }}</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
          <div class="profile_pic">
            <img src="images/img.jpg" alt="..." class="img-circle profile_img">
          </div>
          <div class="profile_info">
            <span>Welcome,</span>
            <h2>{{Auth::user()->name}}</h2>
          </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
          <div class="menu_section">
            <h3>General</h3>
            <ul class="nav side-menu">
              <li><a href="{{Route('admin-dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard <span class="fa fa-chevron-right"></span></a></li>
              
              <li><a href="{{ url('admin-logo') }}"><i class="fa fa-clone"></i>Logo<span class="fa fa-chevron-right"></span></a></li>
              
              <li><a href="{{ url('admin-slides') }}"><i class="fa fa-clone"></i>Slide<span class="fa fa-chevron-right"></span></a></li>
              
              <li><a href="{{ url('admin-about') }}"><i class="fa fa-desktop"></i> About Us <span class="fa fa-chevron-down"></span></a></li>
              
              <li><a href="{{ url('admin-services') }}"><i class="fa fa-cubes"></i> Services <span class="fa fa-chevron-down"></span></a></li>
              
              <li><a href="{{ url('admin-package') }}"><i class="fa fa-archive"></i> Package<span class="fa fa-chevron-down"></span></a></li>
                <ul class="nav child_menu">
                  <li><a href="fixed_sidebar.html">Fixed Sidebar</a></li>
                  <li><a href="fixed_footer.html">Fixed Footer</a></li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="menu_section">
            <h3>Live On</h3>
            <ul class="nav side-menu">
              <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                  <li><a href="e_commerce.html">E-commerce</a></li>
                  <li><a href="projects.html">Projects</a></li>
                  <li><a href="project_detail.html">Project Detail</a></li>
                  <li><a href="contacts.html">Contacts</a></li>
                  <li><a href="profile.html">Profile</a></li>
                </ul>
              </li>
              <li><a href="javascript:void(0)"><i class="fa fa-users"></i> Users </a></li>
              <!-- <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Users <span class="label label-success pull-right">Coming Soon</span></a></li> -->
            </ul>
          </div>

        </div>

        <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
        <!-- /sidebar menu -->
      </div>
    </div>

