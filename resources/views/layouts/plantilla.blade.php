<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('dist/css/calculadora.css') }}">
    {{-- Bootstrap and jQuery --}}
    <link rel="stylesheet" href="{{ asset('dist/bootstrap/css/bootstrap.min.css') }}">
    <script src="{{ asset('dist/bootstrap/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('dist/bootstrap/js/bootstrap.min.js') }}"></script>
    {{-- Calculadora js --}}
    <script src="{{ asset('dist/js/calculadora.js') }}"></script>

    <title>@yield('title')</title>
</head>
<body>
      <div id="wrapper">
        <!-- SideBar -->
        <div id="sidebar-wrapper">
          <ul class="sidebar-nav">
            <div class="container-side-logo">
              <a href="{{ route('inicio') }}" style="display:flex; justify-content: center; align-items: center;">
                <img class="side-logo" src="{{ asset('dist/img/logo.png') }}">
              </a>
            </div>

              <li><hr></li>

              <li>
                  <a href="{{ route('medicina') }}" class="{{ request()->routeIs('medicina.*') || request()->routeIs('medicina') ? 'active' : '' }}" style="display:flex; align-items: center;">
                      <div class="side-medic {{ request()->routeIs('medicina.*') || request()->routeIs('medicina') ? 'activeIcon' : '' }}">
                          <p></p>
                      </div>
                      Medicina
                  </a>
              </li>
{{-- 
              <li>
                <a href="#" class="{{request()->routeIs('inicio') ? 'active' : ''}}" style="display:flex; align-items: center;">
                    <div class="side-medic {{request()->routeIs('inicio') ? 'activeIcon' : ''}}">
                        <p></p>
                    </div>
                    Medicina
                </a>
            </li>
            
            <li>
              <a href="#" class="{{request()->routeIs('inicio') ? 'active' : ''}}" style="display:flex; align-items: center;">
                  <div class="side-medic {{request()->routeIs('inicio') ? 'activeIcon' : ''}}">
                      <p></p>
                  </div>
                  Medicina
              </a>
          </li> --}}
          </ul>
      </div>

        <!-- Page Content -->
        <div id="bloq-wrapper"></div>
        <div id="page-content-wrapper">
                <div class="upBar">
                  @if(Route::currentRouteName() != 'inicio')
                    <img class="btn btn-up" id="menu-toggle" src="{{ asset('dist/img/menu.png') }}">
                  @endif
                
                  <a class="up-logo" href="{{ route('inicio') }}">
                    <img class="up-logo" src="{{ asset('dist/img/logo.png') }}">
                  </a>
                </div>

                <div class="content-all">
                  @yield('content')
                </div>
        </div>
      </div>

</body>
</html>