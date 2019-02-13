
<div class="header py-4" style="
    background-image: linear-gradient(to top left,var(--success),var(--dark)); border-bottom: none; position: relative;">
  <div class="container">
    <div class="d-flex">
      <a class="header-brand" href="./home" style="">
        <img src="{{ asset('./css/img/assobah-logo.png')}}" class="header-brand-img" alt="tabler logo" style="border-radius: 50%;height: 4.5rem;position: absolute;bottom: -2rem;border: 3px solid #418200;">
      </a>
      <span style="color: white;
    font-size: x-large;
    font-family: 'Satisfy', cursive; padding-left: 70px;text-shadow: 2px 2px 2px #97bb73;" >Portal Surau As-Sobah</span>
      <div class="d-flex order-lg-2 ml-auto">
        @auth
        <div class="dropdown">
          <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
            <span class="avatar" style="background-image: url({{env('APP_URL')}}/thumbnail/{{Auth::user()->image_path}}); border: 1px solid #9E9E9E;"></span>
            <span class="ml-2 d-none d-lg-block">
              <span class="text-white">{{ Auth::user()->name }}</span>
              <small class="text-white d-block mt-1">
                @if(Auth::user()->role == "Student" ) {{'Student'}}
                @else {{'Administrator'}}
                @endif
              </small>
            </span>
          </a>
          <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
            <a class="dropdown-item" href="\setup\dashboard">
              <i class="dropdown-icon fe fe-user"></i> Dashboard
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="\logout">
              <i class="dropdown-icon fe fe-log-out"></i> Sign out
            </a>
          </div>
        </div>
        @endauth
      </div>
      <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
        <span class="header-toggler-icon"></span>
      </a>
    </div>
  </div>
</div>