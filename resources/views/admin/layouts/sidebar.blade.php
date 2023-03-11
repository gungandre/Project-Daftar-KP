  <!-- Menu -->

  <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#696cff" fill-opacity="1" d="M0,256L30,213.3C60,171,120,85,180,58.7C240,32,300,64,360,101.3C420,139,480,181,540,208C600,235,660,245,720,229.3C780,213,840,171,900,170.7C960,171,1020,213,1080,240C1140,267,1200,277,1260,250.7C1320,224,1380,160,1410,128L1440,96L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z"></path></svg>
      <div class="menu-inner-shadow"></div>

      <ul class="py-4 menu-inner">

        <div class="menu-header flex-row justify-content-center">
            <img src="{{ asset('assets/img/Lambang_Kabupaten_Manggarai-150x150.png') }}" style="max-width:100px " class="" alt="">
            <p class="" >Kantor Samsat <br> Kabupate  Manggarai</p>
        </div>
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

          @if (Auth::user()->roles == 'admin' || Auth::user()->roles == 'pembina')
              @include('admin.layouts.sidebar-menu.admin-menu')
          @endif

          @if (Auth::user()->roles == 'user')
              @include('admin.layouts.sidebar-menu.user-menu')
          @endif

      </ul>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#696cff" fill-opacity="1" d="M0,64L20,69.3C40,75,80,85,120,106.7C160,128,200,160,240,165.3C280,171,320,149,360,160C400,171,440,213,480,213.3C520,213,560,171,600,128C640,85,680,43,720,64C760,85,800,171,840,202.7C880,235,920,213,960,181.3C1000,149,1040,107,1080,74.7C1120,43,1160,21,1200,21.3C1240,21,1280,43,1320,64C1360,85,1400,107,1420,117.3L1440,128L1440,320L1420,320C1400,320,1360,320,1320,320C1280,320,1240,320,1200,320C1160,320,1120,320,1080,320C1040,320,1000,320,960,320C920,320,880,320,840,320C800,320,760,320,720,320C680,320,640,320,600,320C560,320,520,320,480,320C440,320,400,320,360,320C320,320,280,320,240,320C200,320,160,320,120,320C80,320,40,320,20,320L0,320Z"></path></svg>
  </aside>
  <!-- / Menu -->
