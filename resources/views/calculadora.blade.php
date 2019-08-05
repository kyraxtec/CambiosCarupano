<div class="col-lg-5 mb-5 mb-xl-0">
    <div class="card bg-gradient-default shadow">
      <div class="card-header bg-transparent">
        <div class="row align-items-center">
          <div class="col">
            <h2 class="text-white mb-0">Calculadora</h2>
          </div>
          <table class="table  align-items-center table table-flush">
                <thead class="thead">
                  <tr>
                    <th scope="col">De</th>
                    <th scope="col">A</th>
                    <th scope="col">Monto</th>
                  </tr>
                </thead>
                
                <tbody>
                  <tr>
                    <td><select class="form-control dark" name="" id="">
                    @foreach ($monedas as $moneda)
                      <option class="form-control dark" value="{{$moneda->id}}">{{$moneda->abrev}}</option>   
                    @endforeach  
                    </select></td>
                    <td><select class="form-control dark" name="" id="">
                        @foreach ($monedas_d as $moneda_d)
                          <option class="form-control dark" value="{{$moneda_d->id}}">{{$moneda_d->abrev_d}}</option>   
                        @endforeach  
                        </select></td>
                  </tr>
                </tbody>
              </table>

        </div>
      </div>

    </div>
  </div>