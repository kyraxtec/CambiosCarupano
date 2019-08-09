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
                    <th scope="col">País</th>
                    <th scope="col">Prefijo de cuenta</th>
                    <th scope="col">Acción</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($bancos as $banco)
                        <tr>
                            <td>{{ $banco->nombre }}</td>
                            <td>{{ $banco->pais}}</td>
                            <td>{{ $banco->prefijo}}</td>
                            
                            <td>
                                <a href="{{ route('bancos.edit', $banco->id) }}" onclick="return confirm('Desea actualizar la informacion del banco?')" class="btn btn-warning btn-sm"><span  class="ni ni-settings text-lg"></span></a>
                                <a href="{{ route('bancos.destroy', $banco->id) }}" onclick="return confirm('Desea eliminar el banco?')" class="btn btn-danger btn-sm"><span class="ni ni-fat-remove text-lg"></span></a>
                            </td>
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