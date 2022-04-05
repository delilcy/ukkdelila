@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" style="top:65px;">
            <div class="card" style="position: relative; z-index: 1; max-width: 360px; margin: 0 auto 100px; padding: 45px;   box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);">
                <p style="text-align: center; font-size: 24pt;">
                    {{ __('Login') }}
                </p>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                        @endif
                        <div class="form-group row">

                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('') }}</label>

                            <div class="col-md-12" style="margin-left:5px;">
                                <input id="email" type="email" style=" font-family: Roboto sans-serif; background: #f2f2f2;  width: 100%; border: 0;  margin: 0 0 15px; padding: 15px; box-sizing: border-box; font-size: 14px;outline: 0;" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('') }}</label>

                            <div class="col-md-12" style="margin-left:5px;">
                                <input id="password" type="password" style=" font-family: Roboto sans-serif; background: #f2f2f2;  width: 100%; border: 0;  margin: 0 0 15px; padding: 15px; box-sizing: border-box; font-size: 14px;outline: 0;" placeholder="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">

                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button class="button-62" role="button">
                                    {{ __('Login') }}
                                </button>



                                @if (Route::has('password.request'))
                                <br>
                                <a class="btn btn-link" style="margin-left: -50px;" href="{{ route('password.request') }}">
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
@endsection
