@extends("theme.$theme.layout2")
@section('mensInicio')
<div class="col-lg-5 col-md-6">
    <h1 class="text-white">Bienvenido!</h1>
    <p class="text-lead text-light">Completa el siguiente formulario para crear tu cuenta</p>
  </div>
@endsection
@section('boton')
<a class="nav-link nav-link-icon" href="/">
  <i class="ni ni-key-25"></i>
  <span class="nav-link-inner--text">Ingresar</span>
</a>
@endsection
@include('../theme/argon/formError')
@section('contenido')
<div class="main-content">
  <!-- Page content -->
  <div class="container mt--8 pb-5">
    <!-- Table -->
    <div class="row justify-content-center">
      <div class="col-lg-6 col-md-8">
        <div class="card bg-secondary shadow border-0">
          <div class="card-header bg-transparent pb-5">
            <div class="text-muted text-center mt-2 mb-4"><small>Registrarse con</small></div>
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
              <small>O crea una cuenta con tus credenciales</small>
            </div>
            <form role="form" action="/usuarios/store">
              <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                  </div>
                  <input class="form-control" name="nombre"  placeholder="Nombre" type="text" >
                </div>
              </div>
              <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <input class="form-control" name="apellido"  placeholder="Apellido" type="text" >
                  </div>
                </div>
              <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                  </div>
                  <input class="form-control" name="email" placeholder="Email" type="email" >
                </div>
              </div>
              <div class="form-group">
                <div class="input-group input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                  </div>
                  <input class="form-control" name="pass" placeholder="Contraseña" type="password" >
                </div>
              </div>
              <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" name="pass2" placeholder="Repetir Contraseña" type="password" >
                  </div>
                </div>
              <div class="text-muted font-italic"><small>Dificultad de la contraseña: <span class="text-success font-weight-700">strong</span></small></div>
              <div class="row my-4">
                <div class="col-12">
                  <div class="custom-control custom-control-alternative custom-checkbox">
                    <input class="custom-control-input" id="customCheckRegister" type="checkbox">
                    <label class="custom-control-label" for="customCheckRegister">
                      <span class="text-muted">Acepto los terminos de la <a href="#!">Politica de privacidad</a></span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="text-center">
                <input type="submit" Value="Crear Cuenta" class="btn btn-primary mt-4">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection