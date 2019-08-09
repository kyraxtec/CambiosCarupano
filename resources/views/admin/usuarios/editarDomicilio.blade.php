@extends("theme.$theme.admin.layout")
@section('titulo')
   <h1 class="text-white"> ACTUALIZAR DOMICILIO</h1>
@endsection

@section('contenido')

<div class="row mt-5">
    <div class="container mt--12 pb-5 border-primary">
        <!-- Table -->
        <div class="row justify-content-center">
          <div class="col-lg-6 col-md-8">
            <div class="card bg-secondary shadow border-0">
              <div class="card-header bg-transparent pb-5">
                {!! Form::open(['route' => ['domicilios.update', session()->get('idDom') ], 'method' => 'PUT']) !!}
             
                  <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                             {!! Form::label('pais', 'Pais:') !!}
                      <div class="input-group input-group-alternative mb-3">
                            <div class="input-group-prepend">
                             {!! Form::select('pais', $paises, null, ['class' => 'form-control'])!!} 
                            </div>                      
                        </div>
                  </div>
                </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          {!! Form::label('ciudad', 'Ciudad') !!}
                           <div class="input-group input-group-alternative mb-3">
                            <div class="input-group-prepend">
                              {!! Form::text('ciudad', session()->get('ciudad') , ['class'=>'form-control']) !!}
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
                      <div class="row">
                          <div class="col-lg-6">
                              <div class="form-group">
                                  {!! Form::label('codigopl', 'Código Postal') !!}
                                 <div class="input-group input-group-alternative mb-3">
                                   <div class="input-group-prepend">
                                    {!! Form::text('codigopl', session()->get('codigopl') , ['class'=>'form-control']) !!}
                                   </div>
                                   
                                 </div>
                               </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-lg-12">
                              <div class="form-group">
                                  {!! Form::label('direccion', 'Direccion') !!}
                                 <div class="input-group input-group-alternative mb-3">
                                   <div class="input-group-prepend">
                                    {!! Form::text('direccion', session()->get('direccion') , ['class'=>'form-control']) !!}
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
@endsection