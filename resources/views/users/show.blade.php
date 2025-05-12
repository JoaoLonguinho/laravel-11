@extends('layouts.app')

@section('title', $user->name)

@section('main')
<h1>Mostrar usuário: {{ $user->name }}</h1>

    @php

        $isAdmin = false;

    @endphp

    @if($user->id === 1)
        <div>Sou admin</div>
    @else
        <div>Não sou admin</div>
    @endif
    
    
@endsection
