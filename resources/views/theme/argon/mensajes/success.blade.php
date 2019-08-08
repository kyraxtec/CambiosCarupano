@if (session("mensaje"))
<div class="alert alert-success alert-dismissible fade show" role="alert">
        <span class="alert-inner--icon"><i class="ni ni-like-2"></i></span>
        <span class="alert-inner--text">Mensaje del sistema Cambios Carúpano</span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <ul>
            <li>{{ session("mensaje") }}</li>
         
        </ul>
    </div>
@endif