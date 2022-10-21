<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{asset('assets/dist/img/Law_tsu.png')}}"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">ระบบ มคอ.3, มคอ.5</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="pb-3 mt-3 mb-3 user-panel d-flex">
        <div class="image">
          <img src="{{asset('assets/dist/img/Note-page.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->fullname }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


          {{-- <li class="nav-item">
            <a href="{{url('backend/dashboard')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li> --}}

          {{-- <li class="nav-header">USERS MANAGE</li> --}}
          {{-- <li class="nav-item has-treeview {{ (request()->segment(2) == 'products') ? 'menu-open' : ' ' }} {{ (request()->segment(2) == 'categorys') ? 'menu-open' : ' ' }} {{ (request()->segment(2) == 'tqfs') ? 'menu-open' : '' }} {{ (request()->segment(2) == 'courses') ? 'menu-open' : '' }}"> --}}
            <li class="nav-item has-treeview {{ (request()->segment(2) == 'tqfs') ? 'menu-open' : '' }} {{ (request()->segment(2) == 'courses') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cubes"></i>
              <p>
                เมนู
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              {{-- <li class="nav-item">
                <a href="{{url('backend/products')}}" class="nav-link {{ (request()->segment(2) == 'products') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>สินค้า</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('backend/categorys')}}" class="nav-link {{ (request()->segment(2) == 'categorys') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ประเภทสินค้า</p>
                </a>
              </li> --}}
              <li class="nav-item">
                <a href="{{url('backend/tqfs')}}" class="nav-link {{ (request()->segment(2) == 'tqfs') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>รายวิชา มคอ3,มคอ5</p>
                </a>
              </li>
              
            </ul>
          </li>

          {{-- <li class="nav-item">
            <a href="{{url('backend/payment')}}" class="nav-link">
              <i class="nav-icon fas fa-money-bill-wave-alt"></i>
              <p>
                Payment
              </p>
            </a>
          </li> --}}

         @if(Auth::user()->isAdmin == 1)
          <li class="nav-header">อนุมัติ มคอ.3,มคอ.5 [Admin]</li>

          <li class="nav-item">
            <a href="{{url('backend/courses')}}" class="nav-link {{ (request()->segment(2) == 'courses') ? 'active' : '' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>รายวิชาหลัก</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('backend/alltqfs')}}" class="nav-link {{ (request()->segment(2) == 'alltqfs') ? 'active' : '' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>อนุมัติรายวิชา มคอ.</p>
            </a>
          </li>
          {{-- <li class="nav-item">
            <a href="{{url('backend/reports')}}" class="nav-link">
              <i class="nav-icon fas fa-chart-area"></i>
              <p>
                Reports
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{url('backend/users')}}" class="nav-link">
              <i class="nav-icon fas fa-user-friends"></i>
              <p>
                Users
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{url('backend/settings')}}" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Settings
              </p>
            </a>
          </li> --}}

        @endif

          <li class="nav-header"><hr></li>
          <li class="nav-item">
            {{-- <a href="{{url('backend/logout')}}" class="nav-link"> --}}
              {{-- <i class="nav-icon fas fa-sign-out-alt"></i> --}}
              {{-- <p>
                Logout
              </p> --}}
              <form action="{{route('logout')}}" method="post">
                @csrf
                <button type="submit" class="btn btn-block btn-default btn-flat">Sign out</button>
              </form>
              
            {{-- </a> --}}
          </li>
          {{-- <div class="text-right col-md-6">
            <form action="{{route('logout')}}" method="post">
              @csrf
              <button type="submit" class="btn btn-block btn-default btn-flat">Sign out</button>
            </form>
          </div> --}}


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
