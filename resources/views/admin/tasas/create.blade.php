@extends("theme.$theme.admin.layout")
@section('titulo')
    AGREGAR TASA
@endsection

@section('contenido')

<div class="row mt-5">
    <div class="container mt--8 pb-5">
        <!-- Table -->
        <div class="row justify-content-center">
          <div class="col-lg-6 col-md-8">
            <div class="card bg-secondary shadow border-0">
              <div class="card-header bg-transparent pb-5">
                {!! Form::open(['route' => 'tasas.store', 'method' => 'POST']) !!}
                  <div class="form-group">
                     {!! Form::label('pais', 'Pais:') !!}
                    <div class="input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                      {!! Form::select('pais', $paises, null, ['class' => 'form-control'])!!} 
                      </div>
                      
                    </div>
                  </div>
                  <div class="form-group">
                      {!! Form::label('moneda', 'Moneda:') !!}
                     <div class="input-group input-group-alternative mb-3">
                       <div class="input-group-prepend">
                      {!! Form::select('moneda', $monedas, null, ['class' => 'form-control'])!!} 
                       </div>
                     </div>
                   </div>
                   <div class="form-group">
                      {!! Form::label('tasa', 'Tasa:') !!}
                     <div class="input-group input-group-alternative mb-3">
                       <div class="input-group-prepend">
                        {!! Form::text('tasa', null, ['class'=>'form-control']) !!}
                       </div>
                       
                     </div>
                   </div>
              <div class="text-center">
                    <input type="submit" Value="Agregar Tasa" class="btn btn-primary mt-4">
              </div>
              {!! Form::close() !!}

            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
@endsection