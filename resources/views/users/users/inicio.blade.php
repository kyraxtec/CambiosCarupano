
@extends("theme.$theme.users.layout")
@section('titulo')
PAGINA PRINCIPAL
@endsection

@section('contenido')
    <div class="row">       
       <div class="col-lg-12 card bg-gradient-default shadow">
          <div class="card-header bg-transparent">
            <div class="row align-items-center">
              <div class="col">
                <h2 class="text-white mb-0">Tasas del día para {{ $tasas[0]['nombre']}} </h2>
              </div>
            </div>
          </div>
        </div>
      </div> 
    <br>
<div class="row">
@foreach ($tasas as $tasa)
  
  <div class="col-lg-4">
    <div class="card border-default card-stats mb-4 mb-lg-0">
      <div class="card-body">
        <div class="row">
          <div class="col">
          <h5 class="card-title  text-uppercase text-muted mb-0">{{ $tasa['moneda']}}</h5>
            @if ($tasa['tasa'] == null)
            <span class="h2 font-weight-bold mb-0">No hay tasa disponible</span> 
           @else
             <span class="h2 font-weight-bold mb-0">{{ $tasa['tasa']}}</span>               
            @endif
          </div>
        </div>
      </div>
    </div>
  </div> 

@endforeach
</div>
<br>
<div class="col-lg-12 card bg-gradient-default shadow">
    <div class="card-header bg-transparent">
      <div class="row align-items-center">
        <div class="col">
          <h2 class="text-white mb-0">Tasas en otros países </h2>
        </div>
      </div>
    </div>
  </div>
<br>
 <div class="row">
    <div class="col-lg-2 card ">
        <a href="" name='Venezuela'><img src="{{asset("assets/$theme/img/flags/venezuela.png")}}" width="100%">
    </div></a>
    <div class="col-lg-2 card ">
        <img src="{{asset("assets/$theme/img/flags/colombia.png")}}" width="100%">
    </div>
    <div class="col-lg-2 card ">
        <img src="{{asset("assets/$theme/img/flags/chile.png")}}" width="100%">
    </div>
    <div class="col-lg-2 card ">
        <img src="{{asset("assets/$theme/img/flags/peru.png")}}" width="100%">
    </div>
    <div class="col-lg-2 card ">
        <img src="{{asset("assets/$theme/img/flags/eeuu.png")}}" width="100%">
    </div>




  </div>
@endsection
@section('contenido2')

@endsection