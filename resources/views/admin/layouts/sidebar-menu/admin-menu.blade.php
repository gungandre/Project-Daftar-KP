  <li class="menu-item @if (Request()->route()->getName() == 'pembina.index') active @endif">
      @if (Auth::user()->roles == 'admin')
          <a href="{{ route('pembina.index') }}" class="menu-link">
              <i class="menu-icon tf-icons bx bx-group"></i>
              <div data-i18n="Analytics">Data Pembina</div>
          </a>
      @endif
  </li>
  <li class="menu-item">
      <a href="{{ route('magang.index') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bxs-user-badge"></i>
          <div>Data Magang</div>
      </a>
  </li>
  <li class="menu-item">
      <a href="{{ route('kegiatan-magang.index') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bxs-book-bookmark"></i>
          <div>Kegiatan Magang</div>
      </a>
  </li>
  <li class="menu-item">
      <a href="{{ route('nilai.index') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bxs-receipt"></i>
          <div>Nilai</div>
      </a>
  </li>
  <li class="menu-item">
      <a href="{{ route('divisi.index') }}" class="menu-link">
          <i class='menu-icon bx bxs-user-account'></i>
          <div>Data Divisi</div>
      </a>
  </li>

  <li class="menu-item">
    <a href="{{ route('Periode.index') }}" class="menu-link">
        <i class='menu-icon bx bxs-user-account'></i>
        <div>Buka Pendaftaran Magang</div>
    </a>
</li>
<br>
