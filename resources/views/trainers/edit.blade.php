@extends('layouts.app') <!--hereda de la carpeta layouts/app.blade.php-->

@section('title', 'Trainer Edit')

@section('content')

    {!! Form::model($trainer, ['route' => ['trainers.update',  $trainer], 'method' => 'PUT', 'files' => true]) !!}

    <div class="form-group">
            {!! Form::label('name','Nombre') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('slug','Slug') !!}
            {!! Form::text('slug', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('name','Descripcion') !!}
            {!! Form::text('description', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('avatar','Avatar') !!}
            {!! Form::file('avatar') !!}
        </div>

        {!! Form::submit('Actualizar', ['class' =>'btn btn-primary']) !!}

    {!! Form::close() !!}
           
@endsection