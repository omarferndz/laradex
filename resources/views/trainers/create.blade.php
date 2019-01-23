@extends('layouts.app') <!--hereda de la carpeta layouts/app.blade.php-->

@section('title', 'Trainers Create')

@section('content')
    <div class="form-group">
        <label for="">Nombre</label>
        <input type="text" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
@endsection