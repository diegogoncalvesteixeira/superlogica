@extends('index')

@section('titulo') Exercícios @endsection

@section('content')
  <h1>Exercícios</h1>
  <ul>
    <li><a href="{{ url('/exercicio-1') }}">Exercício 1</a></li>
    <li><a href="{{ url('/exercicio-2') }}">Exercício 2</a></li>
    <li><a href="{{ url('/exercicio-3') }}">Exercício 3</a></li>
  </ul>
@endsection