@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" style="top:-75px;">
            <div class="card" style="width:60%; height:80%; margin-left: 150px; margin-top: 160px;">
                <div class="card-header text-center font-weight-bold" style="background-color: #aeb4e8; font-size: 24pt; font-color: #fffdfc">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row">
                        
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('') }}</label>

                            <div class="col-md-8" style="margin-left:70px;">
                                <input id="email" type="email" style="height: 50px;" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-Mail">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('') }}</label>

                            <div class="col-md-8" style="margin-left:70px;">
                                <input id="password" type="password" style="height: 50px;" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

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
                                    <a class="btn btn-link" style="margin-left: -30px;" href="{{ route('password.request') }}">
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
