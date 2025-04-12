@extends('adminlte::page')

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')
    <div class="row">
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box zoomP">
              <img src="{{ url('/img/calendario.gif') }}" width="70px" alt="">
              <div class="info-box-content">
                <span class="info-box-text"><b>Gestiones registrados</b></span>
                <span class="info-box-number">{{ $total_gestiones }} gestiones</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box zoomP">
              <img src="{{ url('/img/diploma.gif') }}" width="70px" alt="">
              <div class="info-box-content">
                <span class="info-box-text"><b>Carreras registradas</b></span>
                <span class="info-box-number">{{ $total_carreras }} carreras</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box zoomP">
              <img src="{{ url('/img/grafico-de-linea.gif') }}" width="70px" alt="">
              <div class="info-box-content">
                <span class="info-box-text"><b>Niveles registrados</b></span>
                <span class="info-box-number">{{ $total_niveles }} niveles</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>

          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box zoomP">
              <img src="{{ url('/img/materias.gif') }}" width="70px" alt="">
              <div class="info-box-content">
                <span class="info-box-text"><b>materias registrados registrados</b></span>
                <span class="info-box-number">{{ $total_materias }} Materias</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>

          <div class="col-md-3 col-sm-6 col-12">
    <div class="info-box zoomP">
        <img src="{{ url('/img/roles.gif') }}" width="70px" alt="">
        <div class="info-box-content">
            <span class="info-box-text"><b>Roles registrados</b></span>
            <span class="info-box-number">{{ $total_roles }} Roles</span>
        </div>
        </div>
    </div>

    <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box zoomP">
          <img src="{{ url('/img/administrativos.gif') }}" width="70px" alt="">
          <div class="info-box-content">
              <span class="info-box-text"><b>Administrativos registrados</b></span>
              <span class="info-box-number">{{ $total_administrativos }} Administrativos</span>
          </div>
        </div>
    </div>
          
    </div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop