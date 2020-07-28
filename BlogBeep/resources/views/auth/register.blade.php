@extends('layouts.app')

@section('content')
<div class="login-wrap cover">
    <div class="container-login">
        <p class="text-center" style="font-size: 80px;">
            <i class="zmdi zmdi-account-circle"></i>
        </p>
        <h4 class="text-center text-condensedLight">Crear Usuario</h4>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input form-control @error('name') is-invalid @enderror" type="text" name="name" id="userName"value="{{ old('name') }}" required autocomplete="name" autofocus>
                <label class="mdl-textfield__label" for="userName">Nombre de usuario</label>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input form-control @error('telefono') is-invalid @enderror" type="phone" name="telefono" id="userName" required autocomplete="name" autofocus>
                <label class="mdl-textfield__label" for="userName">telefono</label>
                @error('telefono')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input form-control @error('email') is-invalid @enderror" type="email" name="email" id="pass" value="{{ old('email') }}" required autocomplete="email">
                <label class="mdl-textfield__label" for="pass">E-mail</label>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input form-control @error('password') is-invalid @enderror" type="password" id="pass" name="password" required autocomplete="new-password">
                <label class="mdl-textfield__label" for="pass">Contraseña</label>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input form-control" type="password" id="pass" name="password_confirmation" required autocomplete="new-password">
                <label class="mdl-textfield__label" for="pass">Confirmar Contraseña</label>
            </div>
            <button type="submit" class="mdl-button mdl-js-button mdl-js-ripple-effect" style="color: #3F51B5; margin: 0 auto; display: block;">
                Registrame
            </button>
        </form>
    </div>
</div>
@endsection
