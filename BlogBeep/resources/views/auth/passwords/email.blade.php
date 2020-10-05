@extends('layouts.app', [
    'title' => 'Verifica tu Cuenta',
])

@section('content')
<div class="login-wrap cover">
    <div class="container-login">
        <p class="text-center" style="font-size: 80px;">
            <i class="zmdi zmdi-account-circle"></i>
        </p>
        <h5 class="text-center text-condensedLight">Resetear Contraseña</h5>
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input form-control @error('email') is-invalid @enderror" type="email" id="userName" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                <label class="mdl-textfield__label" for="userName">Correo Electronico</label>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <button type="submit" class="mdl-button mdl-js-button mdl-js-ripple-effect" style="color: #3F51B5; margin: 0 auto; display: block;">
                {{ __('Enviar correo') }}
            </button>
        </form>
    </div>
</div>
@endsection
