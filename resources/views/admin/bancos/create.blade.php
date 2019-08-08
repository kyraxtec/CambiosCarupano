@extends("theme.$theme.admin.layout")
@section('titulo')
    AGREGAR BANCO
@endsection

@section('contenido')

<div class="row mt-5">
    <div class="container mt--8 pb-5">
        <!-- Table -->
        <div class="row justify-content-center">
          <div class="col-lg-6 col-md-8">
            <div class="card bg-secondary shadow border-0">
              <div class="card-header bg-transparent pb-5">
                <form role="form" action="/admin/bancos/store">
                  <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                      </div>
                      <input class="form-control" name="nombre"  placeholder="Nombre del Banco" type="text" >
                    </div>
                  </div>
                  <div class="form-group">
                      <div class="input-group input-group-alternative mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                        </div>
                        <input class="form-control" name="prefijo"  placeholder="Prefijo de cuenta" type="text" >
                      </div>
                    </div>

                  <div class="text-center">
                    <input type="submit" Value="Agregar Banco" class="btn btn-primary mt-4">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
@endsection