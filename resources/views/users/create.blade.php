@extends('layouts.app')
<!-- o Section title não funciona com o dd -->
@section('title')
    Cadastro de usuários
@endsection


@section('main')
    <h1>Cadastro de usuários</h1>
    <!-- <a href="{{ route('users.index') }}">Lista de usuarios</a> -->
    <form action="{{ route('users.store') }}" method="POST">
        @csrf

        {{ $errors->any() }}
        @if($errors->any())
            @foreach ($errors->all() as $error)
                <div>
                    {{ $error }}
                </div>
            @endforeach
        @endif
        <div>
            <label for="name">Nome:</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="text" name="email" id="email" value="{{ old('email') }}">
        </div>
        <div>
            <label for="password">Senha:</label>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <button type="submit">Cadastrar</button>
        </div>
    </form>
@endsection