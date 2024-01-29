<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    @vite(['resources/sass/app.scss','resources/js/app.js'])
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">

</head>
<body class="">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">

        <a class="navbar-brand " href="{{route('projects.index')}}">Home</a>

        @auth <a href="">Sair</a> @endauth
        @guest <a href="">Entrar</a> @endguest


    </div>
</nav>

<div class="container mt-4">
    <h1>{{$title}}</h1>

    @isset($successMessage)
        <div class="alert alert-success">
            {{$successMessage}}
        </div>
    @endisset

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{$slot}}
</div>
</body>
</html>
