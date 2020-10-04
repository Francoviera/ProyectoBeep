@extends('layouts.app', [
    'title' => 'Iniciar Sesion',
])

@section('content')
<div class="login-wrap cover">
    <div class="container-login">
        <p class="text-center" style="font-size: 80px;">
            <i class="zmdi zmdi-account-circle"></i>
        </p>
        <h5 class="text-center text-condensedLight card-title">BIENVENIDO</h5>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" id="userName" name="email" value="{{ old('email') }}" required autocomplete="email" autofocu>
                <label class="mdl-textfield__label" for="userName">Nombre de usuario</label>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="password" id="pass" name="password" required autocomplete="current-password">
                <label class="mdl-textfield__label" for="pass">Contraseña</label>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Recuerdamela') }}
                </label>
            </div>
            <button type="submit" class="mdl-button mdl-js-button mdl-js-ripple-effect" style="color: #3F51B5; margin: 0 auto; display: block;">
                Ingresar
            </button>
            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('¿Olvidaste tu contraseña?') }}
                </a>
                <a class="btn btn-link" href="{{ route('register') }}">
                    {{ __('Registrarme') }}
                </a>
            @endif
        </form>
    </div>
</div>
@endsection
