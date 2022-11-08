@extends('index')

@section('titulo') Exercício Um @endsection

@section('content')
    @foreach($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            {{ $error }}
        </div>
    @endforeach
    
    @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endisset
    
    
    <h1>Exercício 1</h1>
    
    <form method="post" action="{{ route('store') }}">
        @csrf
        <div class="form-group">
            <label for="name">Nome completo:</label>
            <input class="form-control" type="text" id="name" name="name" value="{{ old('name') }}">
        </div>
        <div class="form-group">
            <label for="userName">Nome de login:</label>
            <input class="form-control" type="text" id="userName" name="userName" value="{{ old('userName') }}">
        </div>
        <div class="form-group">
            <label for="zipCode">CEP</label>
            <input class="form-control" type="text" id="zipCode" name="zipCode" value="{{ old('zipCode') }}">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input class="form-control" type="text" id="email" name="email" value="{{ old('email') }}">
        </div>
        <div class="form-group">
            <label for="password">Senha (8 caracteres mínimo, contendo pelo menos 1 letra
                e 1 número):</label>
            <input class="form-control" type="password" id="password" name="password">
        </div>
        <input type="submit" value="Cadastrar" class="btn btn-primary">
    </form>
@endsection