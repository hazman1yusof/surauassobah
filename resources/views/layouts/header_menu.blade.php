<div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg order-lg-first" style="padding-left: 100px">

        <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
          <li class="nav-item">
            <a href="\home" class="nav-link @if(Request::is('home') || Request::is('/')) {{'active'}} @endif"><i class="fe fe-home"></i> Utama</a>
          </li>

          <li class="nav-item">
            <a href="\about" class="nav-link {{(Request::is('about') ? 'active' : '')}}" data-toggle="dropdown" href="javascript:void(0)" ><i class="fe fe-inbox"></i> Informasi</a>
            <div class="dropdown-menu dropdown-menu-arrow">
              <a href="./sejarah" class="dropdown-item ">Sejarah Penubuhan</a>
              <a href="./visi" class="dropdown-item ">Visi & Misi</a>
              <a href="./biro" class="dropdown-item ">Biro Masjid</a>
              <a href="./jawatankuasa" class="dropdown-item ">Jawatankuasa Masjid</a>
              <a href="./pencapaian" class="dropdown-item ">Pencapaian Masjid</a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a href="\student" class="nav-link {{(Request::is('student') ? 'active' : '')}}" data-toggle="dropdown" href="javascript:void(0)" ><i class="fe fe-life-buoy"></i> Aktivti</a>
            <div class="dropdown-menu dropdown-menu-arrow">
              <a href="./aktiviti" class="dropdown-item ">Aktiviti Masjid</a>
              <a href="./jadual" class="dropdown-item ">Jadual Kuliah</a>
            </div>
          </li>
          <li class="nav-item">
            <a href="\ahli" class="nav-link {{(Request::is('contact') ? 'active' : '')}}"><i class="fe fe-radio"></i> Ahli Kariah</a>
          </li>
          <li class="nav-item">
            <a href="\galeri" class="nav-link {{(Request::is('donate') ? 'active' : '')}}" ><i class="fe fe-monitor"></i> Galeri</a>
          </li>
          <li class="nav-item">
            <a href="\login" class="nav-link {{(Request::is('login') ? 'active' : '')}}" ><i class="fe fe-user"></i> Admin</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>