<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}} | TissiDevPortifolio</title>
    @vite(['resources/sass/app.scss','resources/js/app.js'])
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
</head>
<body>
<div class="d-block px-3 py-2 text-center text-bold skippy bg-body-tertiary">
    <span href="https://getbootstrap.com/" class="text-black text-decoration-none">TissiDevPortifolio</span>
</div>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <div class="container-fluid">

            <div>
                <span class="navbar-brand">TissiDevPortifolio</span>
                <a class="navbar-brand" href="{{route('projects.index')}}">Home</a>
            </div>

            <ul class="navbar-nav">

                @auth
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('logout')}}">Sair </a>
                    </li>

                    <li class="nav-item py-2 py-lg-1 col-12 col-lg-auto">
                        <div class="vr d-none d-lg-flex h-100 mx-lg-2 text-white"></div>
                        <hr class="d-lg-none my-2 text-white-50">
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('users.destroy')}}">Excluir conta</a>
                    </li>
                @endauth

                @guest
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('login')}}">Entrar</a>
                    </li>
                @endguest
            </ul>
        </div>
    </nav>
</header>


<div class="container mt-4 mb-5 " style="min-height: 100vh">
    <h1>{{$title}}</h1>

    @isset($successMessage)
        <div class="alert alert-success  d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                 class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="margin-right: 10px;">
                <path
                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </svg>
            {{$successMessage}}
        </div>
    @endisset

    @if ($errors->any())
        <div class="alert alert-danger d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                 class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img"
                 aria-label="Warning:">
                <path
                    d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </svg>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{$slot}}
</div>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-0">
    <div class="container-fluid">

        <div>
            <span class="navbar-brand">Desenvolvido por Leonardo Tissi</span>
        </div>

        <ul class="navbar-nav">
            <li class="nav-item col-6 col-md-auto elevate-raise" title="Github">
                <a class="nav-link p-2" href="https://github.com/DevLeonardoTissi" target="_blank" rel="noopener">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                         class="bi bi-github" viewBox="0 0 16 16">
                        <path
                            d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
                    </svg>
                    <small class="d-md-none ms-2">GitHub</small>
                </a>
            </li>

            <li class="nav-item col-6 col-md-auto elevate-raise" title="Linkedin">
                <a class="nav-link p-2" href="https://www.linkedin.com/in/leonardotissi/" target="_blank"
                   rel="noopener">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                         class="bi bi-linkedin" viewBox="0 0 16 16">
                        <path
                            d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
                    </svg>
                    <small class="d-md-none ms-2">LinkedIn</small>
                </a>
            </li>

            <li class="nav-item col-6 col-md-auto elevate-raise" title="Whatsapp">
                <a class="nav-link p-2"
                   href="https://api.whatsapp.com/send/?phone=%2B5532998002817&text&type=phone_number&app_absent=0"
                   target="_blank"
                   rel="noopener">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                         class="bi bi-whatsapp" viewBox="0 0 16 16">
                        <path
                            d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                    </svg>
                    <small class="d-md-none ms-2">Whatsapp</small>
                </a>
            </li>

            <li class="nav-item col-6 col-md-auto elevate-raise" title="Currículo">
                <a class="nav-link p-2"
                   href="https://docs.google.com/document/d/1-ByHz_GVu5e6raPZpiWkSF3vanWWvsUnQC0twdU5noc/edit?usp=sharing"
                   target="_blank"
                   rel="noopener">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                    </svg>
                    <small class="d-md-none ms-2">Whatsapp</small>
                </a>
            </li>
        </ul>
    </div>
</nav>
</body>
</html>
