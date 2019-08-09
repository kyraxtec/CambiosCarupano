@extends("theme.$theme.admin.layout")
@section('contenido')
 <!-- Mask -->
      <span class=" bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-12 col-md-10">
          <h1 class="display-2 text-white">{{ session()->get('nombre') }} {{ session()->get('apellido') }}</h1>
            
          </div>
        </div>
      </div>
    </div><br><br>
    <!-- Page content -->
    <div class="container-fluid mt--10">
      <div class="row">
        <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">

          </div>
        </div>
        <div class="col-xl-8 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="heading mb-0">Información personal <a href="{{route('datospersonales.edit', session()->get('idDat')) }}" onclick="return confirm('Desea actualizar sus datos personales?')" class="btn btn-success btn-sm">editar</a></h3>
                </div>

              </div>
            </div>
            <div class="card-body">
              <form>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="nombreUsuario">Nombre</label>
                        <input type="text" id="nombreUsuario" class="form-control form-control-alternative" disabled value="{{ session()->get('nombre') }}">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="apellidoUsuario">Apellido</label>
                        <input type="text" id="apellidoUsuario" class="form-control form-control-alternative" disabled  value="{{ session()->get('apellido') }}">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Correo eléctronico</label>
                        <input type="email" id="input-email" class="form-control form-control-alternative" disabled value="{{ session()->get('emailUsuario') }}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="idDocType">Tipo de documento</label>
                        <input type="text" id="idDocType" class="form-control form-control-alternative" disabled  value="{{ session()->get('iddoctype') }}">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="idDocNum">Documento numero </label>
                        <input type="text" id="idDocNum" class="form-control form-control-alternative" disabled  value="{{ session()->get('iddocnum') }}">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Address -->
                <h4 class="heading  mb-4">Domicilio <a href="{{route('domicilios.edit', session()->get('idDom')) }}" class="btn btn-success btn-sm">editar</a></h4>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="direccion">Dirección</label>
                        <input id="direccion" class="form-control form-control-alternative" placeholder="" disabled value="{{ session()->get('direccion') }}" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="ciudad">Ciudad</label>
                        <input type="text" id="ciudad" class="form-control form-control-alternative" placeholder=""  disabled value="{{ session()->get('ciudad') }}">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="pais">País</label>
                        <input type="text" id="pais" class="form-control form-control-alternative" placeholder="" disabled value="{{ session()->get('paisd') }}">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="codigopl">Código postal</label>
                        <input type="number" id="codigopl" class="form-control form-control-alternative" disabled value="{{ session()->get('codigopl') }}">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                <!-- banca -->
                <h4 class="heading  mb-4">datos bancarios <a href="#!" class="btn btn-success btn-sm">editar</a></h4>

                  <div class="row">
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label class="form-control-label" for="input-city">Banco</label>
                        <input type="text" id="input-city" class="form-control form-control-alternative" placeholder=""  disabled value="">
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Tipo de Cuenta</label>
                        <input type="text" id="input-country" class="form-control form-control-alternative" placeholder="" disabled value="">
                      </div>
                    </div>
                  </div>
                  <div class="pl-lg-4">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="form-control-label" for="input-address">Cuenta n°:</label>
                            <input id="input-address" class="form-control form-control-alternative" placeholder="" disabled value="" type="text">
                          </div>
                        </div>
                      </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
@endsection
@section('contenido2')

@endsection