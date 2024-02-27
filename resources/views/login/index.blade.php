<x-layout title="Login">
    <form method="post">
        @csrf

        <div class="col-12 form-floating mb-3">
            <input type="text"
                   autofocus
                   class="form-control"
                   id="email"
                   name="email"
                   placeholder="Digite seu email"
                   value="{{old('email')}}">
            <label for="email" class="form-label">Digite seu email</label>
        </div>

        <div class="col-12 form-floating mb-3 mt-3">
            <input type="password"
                   class="form-control"
                   id="password"
                   name="password"
                   placeholder="Digite sua senha"
                   value="{{old('password')}}">
            <label for="password" class="form-label">Digite sua senha</label>
        </div>

        <button type="submit" class="btn btn-primary">Entrar</button>
        <a href="{{route('users.create')}}" class="btn btn-secondary"> Registrar </a>
    </form>
</x-layout>
