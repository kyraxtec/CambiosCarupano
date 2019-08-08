@extends("theme.$theme.admin.layout")
@section('titulo')
   <h1 class="text-white"> ACTUALIZAR DATOS PERSONALES</h1>
@endsection

@section('contenido')

<div class="row mt-5">
    <div class="container mt--12 pb-5 border-primary">
        <!-- Table -->
        <div class="row justify-content-center">
          <div class="col-lg-6 col-md-8">
            <div class="card bg-secondary shadow border-0">
              <div class="card-header bg-transparent pb-5">
                {!! Form::open(['route' => ['datospersonales.update', $datosp[0]['id']], 'method' => 'PUT']) !!}
                <div class="pl-lg-4">
                        <div class="row">
                          <div class="col-lg-6">
                              <div class="form-group">
                                  {!! Form::label('nombre', 'Nombre') !!}
                                 <div class="input-group input-group-alternative mb-3">
                                   <div class="input-group-prepend">
                                    {!! Form::text('nombre', $datosp[0]['nombre'], ['class'=>'form-control']) !!}
                                   </div>
                                   
                                 </div>
                               </div>
                          </div>
                          <div class="col-lg-6">
                              <div class="form-group">
                                  {!! Form::label('apellido', 'Apellido') !!}
                                 <div class="input-group input-group-alternative mb-3">
                                   <div class="input-group-prepend">
                                    {!! Form::text('apellido', $datosp[0]['apellido'], ['class'=>'form-control']) !!}
                                   </div>
                                   
                                 </div>
                               </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-lg-6">
                              <div class="form-group">
                                  {!! Form::label('iddoctype', 'Tipo de Documento') !!}
                                 <div class="input-group input-group-alternative mb-3">
                                   <div class="input-group-prepend">
                                    {!! Form::text('iddoctype', $datosp[0]['iddoctype'], ['class'=>'form-control']) !!}
                                   </div>
                                   
                                 </div>
                               </div>
                          </div>
                          <div class="col-lg-6">
                              <div class="form-group">
                                  {!! Form::label('iddocnum', 'N° Documento') !!}
                                 <div class="input-group input-group-alternative mb-3">
                                   <div class="input-group-prepend">
                                    {!! Form::text('iddocnum', $datosp[0]['iddocnum'], ['class'=>'form-control']) !!}
                                   </div>
                                   
                                 </div>
                               </div>
                          </div>
                      </div>
              <div class="text-center">
                    <input type="submit" Value="Actualizar Datos Personales"  class="btn btn-primary mt-4">
              </div>
              {!! Form::close() !!}

            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
@endsection