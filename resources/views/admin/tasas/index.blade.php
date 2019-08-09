@extends("theme.$theme.admin.layout")
@section('titulo')
    PANEL DE TASA
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
                    <th scope="col">Id</th>
                    <th scope="col">Pais</th>
                    <th scope="col">Moneda Tasada</th>
                    <th scope="col">Tasa de cambio</th>
                    <th scope="col">Acción</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($tasas as $tasa)
                        <tr>
                            <td>{{ $tasa->idTasa }}</td>
                            <td>{{ $tasa->pais }}</td>
                            <td>{{ $tasa->moneda}}</td>
                            <td>{{ $tasa->tasa}} {{ $tasa->pmoneda}}</td>
                            <td>
                            <a href="{{ route('tasas.edit', $tasa->idTasa) }}" onclick="return confirm('Desea actualizar la tasa?')" class="btn btn-warning btn-sm"><span  class="ni ni-settings text-lg"></span></a>
                            <a href="{{ route('tasas.destroy', $tasa->idTasa) }}" onclick="return confirm('Desea eliminar la tasa?')" class="btn btn-danger btn-sm"><span class="ni ni-fat-remove text-lg"></span></a>
                            </td>
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