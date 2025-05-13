@extends('layouts.app')

<!-- o Section title não funciona com o dd -->
@section('title')
    Lista de usuários
@endsection


@section('main')
    <h1 class="title">Hello World!</h1>
    {{ $greeting }} <!-- Váriavel que veio da controller -->

    @php #Blocos php

        $name = "Tony";

    @endphp
    @foreach($users as $user)
        <div>
                Nome: {{$user->name}} / Email: {{ $user->email }}
            </div>
            @endforeach
            <img src="{{ Vite::asset('resources/images/default.jpg') }}">


            {{ $name }}
        @vite('resources/js/app.js')
@endsection
