  <!-- Menu -->

  <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

      <div class="menu-inner-shadow"></div>

      <ul class="py-4 menu-inner">

          <!-- Dashboard -->
          <li class="menu-item @if (Request()->route()->getName() == 'dashboard') active @endif">
              <a href="{{ route('dashboard') }}" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-home-circle"></i>
                  <div data-i18n="Analytics">Dashboard</div>
              </a>
          </li>

          <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Pages</span>
          </li>

          @if (Auth::user()->roles == 'admin')
              @include('admin.layouts.sidebar-menu.admin-menu')
          @endif

      </ul>
  </aside>
  <!-- / Menu -->
