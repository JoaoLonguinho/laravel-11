<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de usuários</title>
</head>

<body>
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
</body>
</html>