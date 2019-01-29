@extends('layouts.app') <!--hereda de la carpeta layouts/app.blade.php-->

@section('title', 'Trainers')

@section('content')
<div class="row">
    @foreach($trainers as $trainer)          
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="images/{{$trainer->avatar}}" alt="" class="src">
                <div class="card-body">
                    <h5 class="card-title">{{$trainer->name}}</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>               
    @endforeach 
</div>  
@endsection