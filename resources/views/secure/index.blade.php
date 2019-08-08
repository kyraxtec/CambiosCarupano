@extends("theme.$theme.layout2")
@section('mensInicio')
<div class="col-lg-5 col-md-6">
    <h1 class="text-white">Bienvenido!</h1>
  </div>
@endsection
@section('boton')
<a class="nav-link nav-link-icon" href="/secure/create">
  <i class="ni ni-key-25"></i>
  <span class="nav-link-inner--text">Registrarse</span>
</a>
@endsection
@section('contenido')
<div class="main-content">
  <!-- Page content -->
  <div class="container mt--8 pb-5">
    <div class="row justify-content-center">
      <div class="col-lg-5 col-md-7">
        <div class="card bg-secondary shadow border-0">
          <div class="card-header bg-transparent pb-5">
            <div class="text-muted text-center mt-2 mb-3"><small>Ingressar con:</small></div>
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
              <small>O ingresa con tus datos</small>
            </div>
            @include("theme/$theme/mensajes/formError")
          <form role="form" action="{{route('login_post')}}" method="POST" autocomplete="off">
              @csrf
              <div class="form-group mb-3">
                <div class="input-group input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                  </div>
                <input class="form-control" value="{{old('email')}}" name="email" placeholder="Correo" type="email">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                  </div>
                  <input class="form-control" name="password" placeholder="Contraseña" type="password">
                </div>
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
            <a href="/usuarios/create" class="text-light"><small>Crear cuenta</small></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection