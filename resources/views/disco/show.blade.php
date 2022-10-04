@extends('layouts.base')
@section('conteudo')
    <center><h1>Disco </h1>
    <ol>
        <p>Foto:{{$disco->fotourl}}</p>
        <h2>{{$disco->cantor}}</h2> 
        <p>Pais de origem:{{$disco->pais}}</p>
        <p>Banda:{{$disco->banda}}</p>
        <p>Genero Musical:{{$disco->genero}}</p>
        <p>Data de Criação: {{$disco->created_at}}</p>
    </ol>
    <center>
@endsection
