@extends("theme.$theme.admin.layout")
@section('titulo')
    PANEL DE USUARIOS
@endsection

@section('contenido')
<div class="row mt-5">
        <div class="col">
          <div class="card bg-default shadow">
            <div class="card-header bg-transparent border-0">
              <h3 class="text-white mb-0">Lista de Usuarios</h3>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-dark table-flush">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Usuario</th>
                    <th scope="col">Correo</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $usuario)
                        <tr>
                            <td>{{ $usuario->nombre }} {{ $usuario->apellido }}</td>
                            <td>{{ $usuario->email}}</td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
              {!! $usuarios->render() !!}
            </div>
          </div>
        </div>
      </div>
@endsection