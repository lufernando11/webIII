@extends('adminlte::page')

@section('content_header')
    <h1><b>Gestiones/Personal Administrativo/Registro de un personal administrativo</b></h1>
    <hr>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Lleno los datos del formulario</h3>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{url('admin/administrativos/create')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Nombre de rol<b> (*)</b></label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user-check"></i></span>
                                        </div>
                                        <select name="rol" id="" class="form-control">
                                            <option value="">Seleccione un rol...</option>
                                            @foreach ($roles as $rol)
                                                <option value="{{ $rol->name }}">{{ $rol->name }}</option>
                                            @endforeach
                                         </select>
                                        
                                    </div>
                                    @error('rol')
                                        <small style="color: red">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="nombres">Nombres<b>(*)</b></label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-user"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" name="nombres" id="nombres" value="{{ old('nombres')}}" placeholder="Ingrese nombres..."required>
                                    </div>
                                    @error('nombres')
                                        <small style="color: red;">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="apellidos">Apellidos<b>(*)</b></label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-user-friends"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" name="apellidos" id="apellidos" value="{{ old('apellidos')}}" placeholder="Ingrese apellidos..."required>
                                    </div>
                                    @error('apellidos')
                                        <small style="color: red;">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="ci">cedula de Identidad<b>(*)</b></label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-id-card"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" name="ci" id="ci" value="{{ old('ci')}}" placeholder="Ingrese CI..."required>
                                    </div>
                                    @error('ci')
                                        <small style="color: red;">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="fecha_nacimiento">Fecha de Nacimiento</label><b>(*)</b>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fas fa-calendar-alt"></i>
                                                </span>
                                            </div>
                                            <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento">
                                        </div>
                                        @error('fecha_nacimiento')
                                            <small style="color: red;">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="telefono">Telefono<b>(*)</b></label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-phone"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" name="telefono" id="telefono" value="{{ old('telefono')}}"placeholder="Ingrese Telefono..."required>
                                    </div>
                                    @error('telefono')
                                        <small style="color: red;">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="direccion">Email<b>(*)</b></label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-envelope"></i>
                                            </span>
                                        </div>
                                        <input type="email" class="form-control" name="email" id="email" value="{{ old('email')}}"placeholder="Ingrese su email..."required>
                                    </div>
                                    @error('direccion')
                                        <small style="color: red;">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="profesion">Profesion<b>(*)</b></label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-briefcase"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" name="profesion" id="profesion" value="{{ old('profesion')}}"placeholder="Ingrese profesion..."require>
                                    </div>
                                    @error('profesion')
                                        <small style="color: red;">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div> 
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="direccion">Direccion<b>(*)</b></label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-map-marker-alt"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" name="direccion" id="direccion" value="{{ old('direccion')}}"placeholder="Ingrese Direccion..."require>
                                    </div>
                                    @error('direccion')
                                        <small style="color: red;">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <a href="{{url('/admin/administrativos')}}" class="btn btn-secondary">Cancelar</a>
                                    <button type="submit" class="btn btn-primary">Registrar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@stop

@section('css')

@stop

@section('js')

@stop