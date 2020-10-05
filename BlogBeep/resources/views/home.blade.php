@extends('layouts.app', [
    'title' => 'Home',
])

@section('content')
<div class="login-wrap cover">
    <div class="container-login">
        <p class="text-center" style="font-size: 80px;">
            <i class="zmdi zmdi-account-circle"></i>
        </p>
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <h4 class="text-center text-condensedLight">{{ __('Ya estas Logeado') }}</h4>
        <h5 class="text-center text-condensedLight">{{ Auth::user()->name }}</h5>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <button type="submit" class="mdl-button mdl-js-button mdl-js-ripple-effect" style="color: #3F51B5; margin: 0 auto; display: block;">
                        {{ __('Cerrar Sesion') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
