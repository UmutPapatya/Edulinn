@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <div class="mdk-header-layout__content page-content " style="padding-top: 64px;">

    <div class="pt-32pt pt-sm-64pt pb-32pt">
        <div class="container page__container">
            <form action="index.html" class="col-md-5 p-0 mx-auto">
                <div class="form-group">
                    <label class="form-label" for="email">Email:</label>
                    <input id="email" type="text" class="form-control" placeholder="Your email address ...">
                </div>
                <div class="form-group">
                    <label class="form-label" for="password">Password:</label>
                    <input id="password" type="password" class="form-control" placeholder="Your first and last name ...">
                    <p class="text-right"><a href="reset-password.html" class="small">Forgot your password?</a></p>
                </div>
                <div class="text-center">
                    <button class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
    </div>
    <div class="page-separator justify-content-center m-0">
        <div class="page-separator__text">or sign-in with</div>
    </div>
    <div class="bg-body pt-32pt pb-32pt pb-md-64pt text-center">
        <div class="container page__container">
            <a href="index.html" class="btn btn-secondary btn-block-xs">Facebook</a>
            <a href="index.html" class="btn btn-secondary btn-block-xs">Twitter</a>
            <a href="index.html" class="btn btn-secondary btn-block-xs">Google+</a>
        </div>
    </div>

</div> --}}

{{-- <div class="mdk-header-layout__content page-content ">

    <div class="pt-32pt pt-sm-64pt pb-32pt">
        <div class="container page__container">
            <form action="index.html"
                  class="col-md-5 p-0 mx-auto">
                <div class="form-group">
                    <label class="form-label"
                           for="email">Email:</label>
                    <input id="email"
                           type="text"
                           class="form-control"
                           placeholder="Your email address ...">
                </div>
                <div class="form-group">
                    <label class="form-label"
                           for="password">Password:</label>
                    <input id="password"
                           type="password"
                           class="form-control"
                           placeholder="Your first and last name ...">
                    <p class="text-right"><a href="reset-password.html"
                           class="small">Forgot your password?</a></p>
                </div>
                <div class="text-center">
                    <button class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
    </div>
    <div class="page-separator justify-content-center m-0">
        <div class="page-separator__text">or sign-in with</div>
    </div>
    <div class="bg-body pt-32pt pb-32pt pb-md-64pt text-center">
        <div class="container page__container">
            <a href="index.html"
               class="btn btn-secondary btn-block-xs">Facebook</a>
            <a href="index.html"
               class="btn btn-secondary btn-block-xs">Twitter</a>
            <a href="index.html"
               class="btn btn-secondary btn-block-xs">Google+</a>
        </div>
    </div>

</div> --}}
@endsection
