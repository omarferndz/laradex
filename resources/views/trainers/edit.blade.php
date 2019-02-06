@extends('layouts.app') <!--hereda de la carpeta layouts/app.blade.php-->

@section('title', 'Trainer Edit')

@section('content')

    {!! Form::model($trainer, ['route' => ['trainers.update',  $trainer], 'method' => 'PUT', 'files' => true]) !!}

    @include('trainers.form')

        {!! Form::submit('Actualizar', ['class' =>'btn btn-primary']) !!}

    {!! Form::close() !!}
           
@endsection