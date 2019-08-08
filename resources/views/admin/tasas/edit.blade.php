@extends("theme.$theme.admin.layout")
@section('titulo')
   <h1 class="text-white"> ACTUALIZAR TASA PARA {{$tasa[0]['moneda']}} EN {{$tasa[0]['pais']}}</h1>
@endsection

@section('contenido')

<div class="row mt-5">
    <div class="container mt--12 pb-5 border-primary">
        <!-- Table -->
        <div class="row justify-content-center">
          <div class="col-lg-6 col-md-8">
            <div class="card bg-secondary shadow border-0">
              <div class="card-header bg-transparent pb-5">
                {!! Form::open(['route' => ['tasas.update', $tasa[0]['idTasa']], 'method' => 'PUT']) !!}

                   <div class="form-group">
                      {!! Form::label('tasa', 'Use punto (.) para los decimales, Tasa Actual:') !!}
                     <div class="input-group input-group-alternative mb-3">
                       <div class="input-group-prepend">
                        {!! Form::text('tasa', $tasa[0]['tasa'], ['class'=>'form-control']) !!}
                       </div>
                       
                     </div>
                   </div>
              <div class="text-center">
                    <input type="submit" Value="Actualizar Tasa" class="btn btn-primary mt-4">
              </div>
              {!! Form::close() !!}

            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
@endsection