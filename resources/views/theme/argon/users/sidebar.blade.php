<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="./index.html">
        <img src="{{asset("assets/$theme/img/brand/blue.png")}}" class="navbar-brand-img" alt="...">
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
          <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ni ni-bell-55"></i>
          </a>

        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="{{asset("assets/$theme/img/theme/kyraxtec-portrait.jpg")}}">
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Bienvenido</h6>
            </div>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-single-02"></i>
              <span>Perfil</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-settings-gear-65"></i>
              <span>Configuraciones</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-calendar-grid-58"></i>
              <span>Actividad</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-support-16"></i>
              <span>Soporte</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="/secure/logout" class="dropdown-item">
              <i class="ni ni-user-run"></i>
              <span>Salssssssir</span>
            </a>
          </div>
        </li>
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="./index.html">
                <img src="./assets/img/brand/blue.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Form -->
        <form class="mt-4 mb-3 d-md-none">
          <div class="input-group input-group-rounded input-group-merge">
            <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fa fa-search"></span>
              </div>
            </div>
          </div>
        </form>
        <!-- Navigation -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-primary" href="/user/usershome">
                  <i class="ni ni-tv-2 text-primary"></i> <b>Inicio</b> 
                </a>
              </li>
              </li>
            <li class="nav-item bg-primary text-white">            
                <h6 class="navbar-heading text-white text-center">Transacciones</h6>               
              </li>
              <li class="nav-item">
                  <a class="nav-link text-primary" href="#">
                    <i class="ni ni-world-2 text-primary"></i><b>Calculadora</b>
                  </a>
                </li>
            <li class="nav-item">
                <a class="nav-link text-primary" href="#">
                  <i class="ni ni-world-2 text-primary"></i><b>Solicitar Transferencias</b>
                </a>
              </li>

              <li class="nav-item">
                  <a class="nav-link text-primary" href="#">
                    <i class="ni ni-world-2 text-primary"></i><b>Historial de Transferencias</b>
                  </a>
                </li>
                <li class="nav-item bg-primary text-white">            
                    <h6 class="navbar-heading text-white text-center">Soporte</h6>               
                  </li>
                <li class="nav-item">
                    <a class="nav-link text-primary" href="#">
                      <i class="ni ni-support-16 text-primary"></i><b>Reclamos</b>
                    </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-primary" href="#">
                        <i class="ni ni-bulb-61 text-primary"></i><b>Sugerencias</b>
                      </a>
                    </li>
        </ul>
        <!-- Divider -->
      </div>
    </div>
  </nav>