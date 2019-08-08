<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>@yield('titulo', 'Cambios Carupano') | Cambios Carupano</title>
  <!-- Favicon -->
  <link href="{{asset("assets/$theme/img/brand/favicon.png")}}" rel="icon" type="image/png">
  <!-- Icons -->
  <link href="{{asset("assets/$theme/vendor/nucleo/css/nucleo.css")}}" rel="stylesheet">
  <link href="{{asset("assets/$theme/vendor/@fortawesome/fontawesome-free/css/all.min.css")}}" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="{{asset("assets/$theme/css/argon.css?v=1.0.0")}}" rel="stylesheet">
</head>
  <!-- Inicio Body -->
<body>
<!-- barra lateral -->
    @include("theme/$theme/users/sidebar")
<!-- ----------------->
<!-- Contenido de la pagina -->
    <div class="main-content">
<!-- Barra superior -->
@include("theme/$theme/users/topbar")
@include("theme/$theme/header")
 <!-- Page content -->
 <div class="container-fluid mt--7">
@include("theme/$theme/mensajes/formError")
@include("theme/$theme/mensajes/success")
@yield('contenido')
</div>
<div class="container">
  @yield('contenido2')
  </div>
@include("theme/$theme/footer")
</div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{asset("assets/$theme/vendor/jquery/dist/jquery.min.js")}}"></script>
  <script src="{{asset("assets/$theme/vendor/bootstrap/dist/js/bootstrap.bundle.min.js")}}"></script>
  <!-- Optional JS -->
  <script src="{{asset("assets/$theme/vendor/chart.js/dist/Chart.min.js")}}"></script>
  <script src="{{asset("assets/$theme//vendor/chart.js/dist/Chart.extension.js")}}"></script>

  <!-- Argon JS -->
  <script src="{{asset("assets/$theme//js/argon.js?v=1.0.0")}}"></script>
</body>