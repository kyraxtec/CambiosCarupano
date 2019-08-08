@extends("theme.$theme.users.layout")
@section('titulo')
PAGINA PRINCIPAL USUARIOS
@endsection

@section('contenido')
    <div class="row">       
        <div class="col-lg-12 mb-5 mb-xl-0">
            <div class="card bg-gradient-default shadow">
              <div class="card-header bg-transparent">
                <div class="row align-items-center">
                  <div class="col">
                    <h2 class="text-white mb-0">Tasas del día</h2>
                  </div>
                   </div>
              </div>

            </div>
        </div>

    </div> 
    <br>
    <div style="width: 18rem;">
    
      <div class="card border-default card-stats mb-4 mb-lg-0">
          <div class="card-body">
              <div class="row">
                  <div class="col">
                      <h5 class="card-title  text-uppercase text-muted mb-0">Dólar</h5>
                      <span class="h2 font-weight-bold mb-0">12.400</span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="card border-default card-stats mb-4 mb-lg-0">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <h5 class="card-title  text-uppercase text-muted mb-0">Peso colombiano</h5>
                    <span class="h2 font-weight-bold mb-0">50,807</span>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                      <i class="fas fa-chart-bar"></i>
                  </div>
                </div>
            </div>
        </div>
    </div> 
      
      </div>
@endsection
@section('contenido2')

@endsection