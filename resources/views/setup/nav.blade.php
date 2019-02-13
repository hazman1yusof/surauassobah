
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">

        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('setup/dashboard') ? 'active' : '' }}" href="/setup/dashboard">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
        </ul>
        <hr>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Setup</span>
        </h6>

        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('setup/users') ? 'active' : '' }}" href="/setup/users">
              <span data-feather="user-plus"></span>
              Users
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('setup/carousel') ? 'active' : '' }}" href="/setup/carousel">
              <span data-feather="airplay"></span>
              Carousel Image
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('setup/kariah') ? 'active' : '' }}" href="/setup/kariah">
              <span data-feather="users"></span>
              Ahli Kariah
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('setup/ceramah') ? 'active' : '' }}" href="/setup/ceramah">
              <span data-feather="layers"></span>
              Ceramah Agama
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('setup/hebahan') ? 'active' : '' }}" href="/setup/hebahan">
              <span data-feather="radio"></span>
              Hebahan/Makluman
            </a>
          </li>
        </ul>
        <hr>

      </div>
    </nav>