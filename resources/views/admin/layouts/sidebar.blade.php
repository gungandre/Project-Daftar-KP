  <!-- Menu -->

  <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

      <div class="menu-inner-shadow"></div>

      <ul class="menu-inner py-4">
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
          <li class="menu-item @if (Request()->route()->getName() == 'pembina.index') active @endif">
              <a href="{{ route('pembina.index') }}" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-group"></i>
                  <div data-i18n="Analytics">Data Pembina</div>
              </a>
          </li>
          <li class="menu-item">
              <a href="#" class="menu-link">
                  <i class="menu-icon tf-icons bx bxs-user-badge"></i>
                  <div data-i18n="Analytics">Data Magang</div>
              </a>
          </li>
          <li class="menu-item">
              <a href="#" class="menu-link">
                  <i class="menu-icon tf-icons bx bxs-book-bookmark"></i>
                  <div data-i18n="Analytics">Kegiatan Magang</div>
              </a>
          </li>
          <li class="menu-item">
              <a href="#" class="menu-link">
                  <i class="menu-icon tf-icons bx bxs-receipt"></i>
                  <div data-i18n="Analytics">Nilai</div>
              </a>
          </li>
      </ul>
  </aside>
  <!-- / Menu -->
