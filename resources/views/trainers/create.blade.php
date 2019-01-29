@extends('layouts.app') <!--hereda de la carpeta layouts/app.blade.php-->

@section('title', 'Trainers Create')

@section('content')
    <form class="form-group" method="POST" action="/trainers" enctype="multipart/form-data">
        @csrf <!--laravel esta seguro de que esa identificacion viene 
        de un usuario identificado--> 
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" name="name" class="form-control">
        </div>    

        <div class="form-group">
            <label for="">Descripción</label>
            <input type="text" name="description" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Avatar</label>
            <input type="file" name="avatar">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>        
@endsection