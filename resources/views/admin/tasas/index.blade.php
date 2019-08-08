@extends("theme.$theme.admin.layout")
@section('titulo')
    PANEL DE TASAs
@endsection

@section('contenido')

<div class="row mt-5">
        <div class="col">
          <div class="card bg-default shadow">
            <div class="card-header bg-transparent border-0">
              <h3 class="text-white mb-0">Lista Tasas por países  <a href="tasas/create" class="btn btn-primary" >Agregar</a></h3>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-dark table-flush">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Pais</th>
                    <th scope="col">Moneda Tasada</th>
                    <th scope="col">Tasa de cambio</th>
                    <th scope="col">Acción</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($tasas as $tasa)
                        <tr>
                            <td>{{ $tasa->nombre }}</td>
                            <td>{{ $tasa->moneda}}</td>
                            <td>{{ $tasa->tasa}}</td>
                            <td></td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
              {!! $tasas->render() !!}
            </div>
          </div>
        </div>
      </div>
@endsection