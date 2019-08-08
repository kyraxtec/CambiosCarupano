@extends("theme.$theme.admin.layout")
@section('titulo')
    PANEL DE BANCOS
@endsection

@section('contenido')

<div class="row mt-5">
        <div class="col">
          <div class="card bg-default shadow">
            <div class="card-header bg-transparent border-0">
              <h3 class="text-white mb-0">Lista de Entidades bancarias  <a href="bancos/create" class="btn btn-primary" >Agregar</a></h3>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-dark table-flush">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Prefijo de cuenta</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($bancos as $banco)
                        <tr>
                            <td>{{ $banco->nombre }}</td>
                            <td>{{ $banco->prefijo}}</td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
              {!! $bancos->render() !!}
            </div>
          </div>
        </div>
      </div>
@endsection