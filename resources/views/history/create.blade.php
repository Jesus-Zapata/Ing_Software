@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/donate.css') }}">
<!-- CSS --><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<!-- jQuery and JS bundle w/ Popper.js --><script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1>{{ __('Agregar Donacion') }}</h1>
                    <div class="row">
                        <form class="col s12" method="POST" action="{{route('history.save')}}">
                        @csrf
                            <div class="row">
                                <div class="input-field col s12">
                                <textarea id="textarea1" name="name" class="materialize-textarea"></textarea>
                                <label for="textarea1">Nombre de la Organizacion</label>
                                </div>
                                <div class="input-field col s12">
                                <textarea id="textarea2" name="value" class="materialize-textarea"></textarea>
                                <label for="textarea2">Monto donado</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">
                                    {{ __('Agregar') }}
                                </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection