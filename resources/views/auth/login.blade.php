@extends('layouts.app')

@section('content')
<div id="login" class="form-container">
     <form method="POST" class="form" action="{{ route('login') }}">
        @csrf
        <img src="./img/deliveg1.png" style="width:150px;" alt="logo">

            <div class="form-group row">
                <label for="email" class="email col-md-12 col-form-label text-md-left">{{ __('Email') }}</label>
                <div class="col-md-12">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="senha col-md-12 col-form-label text-md-left">{{ __('Senha') }}</label>
                <div class="col-md-12">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6 offset-md-2">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                             {{ __('Manter Logado') }}
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-2">
                    <button id="login-btn" type="submit" class="btn btn-primary">
                        {{ __('Entrar') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Esqueceu a senha?') }}
                         </a>
                     @endif
                </div>
            </div>
        </form>
</div>
@endsection
