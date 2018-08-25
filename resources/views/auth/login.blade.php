@extends('layouts.app')

@section('content')

<div class="light container-small">

    <div id="login">

        <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">

                @csrf

                <div class="form-input">
                    <h1>Login</h1>
                </div>

                <!--EMAIL-->
                <div class="form-input">
                    <input id="email" type="email" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
                </div>

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif

                <!--PASSWORD-->
                <div class="form-input">
                    <input id="password" type="password" placeholder="Password" name="password" required>
                </div>

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif

                <!--REMEMBER ME-->
                {{-- <div class="form-input">
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label for="remember">{{ __('Remember Me') }}</label>
                </div> --}}

                <!--SUBMIT-->
                <button type="submit" class="button">
                    {{ __('Login') }}
                </button>

                <!--FORGOT PASSWORD-->
                {{-- <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a> --}}
        </form>

    </div>

</div>

@endsection
