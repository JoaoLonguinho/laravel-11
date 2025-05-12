@extends('layouts.app')

@section('main')
    <h1>Hello World!</h1>
    {{ $greeting }} <!-- Váriavel que veio da controller -->

    @php #Blocos php

        $name = "Tony";

    @endphp
    @foreach($users as $user)
            <div>
            Nome: {{$user->name}} / Email: {{ $user->email }}
        </div>
    @endforeach

        {{ $name }}
        {{ dd($users) }}
@endsection
