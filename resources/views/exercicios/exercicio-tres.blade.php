@extends('index')

@section('titulo') Exercício Três @endsection

@section('content')
  <h1>Exercício 3</h1>
  
  <table class="table">
    <tr>
      <th>Usuário</th>
      <th>maior_50_anos</th>
    </tr>
    @isset($usuarios)
      @foreach($usuarios as $usuario)
        <tr>
          <td>{{ $usuario->nome }}</td>
          <td>{{ $usuario->info->maior_idade }}</td>
        </tr>
      @endforeach
    @endisset
  </table>
@endsection