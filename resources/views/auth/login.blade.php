@extends("theme.$theme.layout2")
@section('mensInicio')
<div class="col-lg-5 col-md-6">
    <h1 class="text-white">Bienvenido!</h1>
  </div>
@endsection
@section('boton')
<a class="nav-link nav-link-icon" href="/usuarios/create">
    <i class="ni ni-circle-08"></i>
    <span class="nav-link-inner--text">Registrarse</span>
  </a>
@endsection
@section('contenido')
<div class="container mt--8 pb-5">
        <div class="row justify-content-center">
          <div class="col-lg-5 col-md-7">
            <div class="card bg-secondary shadow border-0">
              <div class="card-header bg-transparent pb-5">
                <div class="text-muted text-center mt-2 mb-3"><small>Ingresar con:</small></div>
                <div class="text-center">
                        <a href="#" class="btn btn-neutral btn-icon mr-4">
                          <span class="btn-inner--icon"><img src={{asset("assets/$theme/img/icons/common/github.svg")}}></span>
                          <span class="btn-inner--text">Github</span>
                        </a>
                        <a href="#" class="btn btn-neutral btn-icon">
                          <span class="btn-inner--icon"><img src={{asset("assets/$theme/img/icons/common/google.svg")}}></span>
                          <span class="btn-inner--text">Google</span>
                        </a>
                      </div>
              </div>
              <div class="card-body px-lg-5 py-lg-5">
                <div class="text-center text-muted mb-4">
                  <small>O ingrese con sus datos</small>
                </div>
                <form role="form">
                  <div class="form-group mb-3">
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                      </div>
                      <input class="form-control" placeholder="Correo" type="email">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                      </div>
                      <input class="form-control" placeholder="Contraseña" type="password">
                    </div>
                  </div>
                  <div class="custom-control custom-control-alternative custom-checkbox">
                    <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                    <label class="custom-control-label" for=" customCheckLogin">
                      <span class="text-muted">Recordarme</span>
                    </label>
                  </div>
                  <div class="text-center">
                    <input type="submit" value="Ingresar" class="btn btn-primary my-4">
                  </div>
                </form>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-6">
                <a href="#" class="text-light"><small>Olvidó su contraseña?</small></a>
              </div>
              <div class="col-6 text-right">
                <a href="/usuarios/create" class="text-light"><small>Crear cuenta nueva</small></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
