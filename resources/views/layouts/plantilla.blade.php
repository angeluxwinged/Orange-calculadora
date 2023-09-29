<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('../resources/css/calculadora.css') }}">
    {{-- Bootstrap and jQuery --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    {{-- Calculadora js --}}
    <script src="{{ asset('../resources/js/calculadora.js') }}"></script>

    <title>@yield('title')</title>
</head>
<body>
      <div id="wrapper">
        <!-- SideBar -->
        <div id="sidebar-wrapper">
          <ul class="sidebar-nav">
            <div class="container-side-logo">
              <a href="{{ route('inicio') }}" style="display:flex; justify-content: center; align-items: center;">
                <img class="side-logo" src="{{ asset('../resources/img/logo.png') }}">
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
                    <img class="btn btn-up" id="menu-toggle" src="{{ asset('../resources/img/menu.png') }}">
                  @endif
                
                  <img class="up-logo" src="{{ asset('../resources/img/logo.png') }}">
                </div>

                <div class="content-all">
                  @yield('content')
                </div>
        </div>
      </div>
</body>
</html>