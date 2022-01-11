<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="{{ asset('/adminlte/dist/img/AdminLTELogo.png')}}"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Forumku</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('/adminlte/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="/profile" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="/adminlte/master" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Home
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="/question" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Question
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="/answer" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Answer
              </p>
            </a>
          </li>
          @auth
          <li class="nav-item has-treeview">
            <a href="/genre" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Genre
              </p>
            </a>
          </li>
          @endauth

          @auth
          <li class="nav-item bg-danger">
              <a class="nav-link" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                  </a>

                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
            </li>
          @endauth

          @guest
          <li class="nav-item bg-primary">
            <a href="/login" class="nav-link">
              <p>
               Login

              </p>
            </a>
          </li>
          @endguest

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>