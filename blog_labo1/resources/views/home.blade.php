@extends('plantilla')
@section('pestaña_name','Home')


@section('content')
<h1>Home</h1>
{{$errors}}
<form  method = "POST" action="{{route('home')}}">
    @csrf
    <input name ="name" placeholder="Ingresa tu nombre">
    <input name ="apellidos" placeholder="Ingresa tus apellidos">
    <button>Enviar</button>

</form>

@endsection