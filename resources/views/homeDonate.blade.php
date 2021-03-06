@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/donate.css') }}">
<!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1>{{ __('Organizaciones') }}</h1>

                <div class="card-body">
                    <div class="row">
                        <div class="col s1">
                            <form class="form-inline" method="POST" action="{{route('filtro')}}">
                                @csrf
                                <select name="filtro" class="form-control mr-sm-2" id="filtro">
                                    <option>Elige un filtro</option>
                                    <option>Ninguno</option>
                                    <option>Salud</option>
                                    <option>Ambiente</option>
                                    <option>Comunidad</option>
                                    <option>Educacion</option>
                                </select>
                        </div>
                        <div class="col s1">
                            <button class="waves-effect waves-light btn-small" type="submit">Filtrar</button>
                        </div>
                            </form>
                    </div>
                    @foreach($data["donations"] as $donation)
                    <li>
                        <div class="sub-titulo">{{$donation->name}}:</div>
                        <pr>
                            <p> {{$donation->description}}</p>
                            <input type='button' class="btn btn-primary" value="Ir al sitio" onclick="location.href='{{$donation->link}}'">
                    </li>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection