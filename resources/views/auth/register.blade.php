@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" style="top:65px;">
            <div class="card" style="position: relative; z-index: 1; max-width: 360px; margin: 0 auto 100px; padding: 45px; box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);">
                <p style="text-align: center; font-size: 24pt;">
                    {{ __('Register') }}
                </p>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                       
                        <div class="form-group row">


                            <div class="col-md-12">
                                <input id="name" style=" font-family: Roboto sans-serif; background: #f2f2f2;  width: 100%; border: 0;  margin: 0 0 15px; padding: 15px; box-sizing: border-box; font-size: 14px;outline: 0;" placeholder="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">


                            <div class="col-md-12">
                                <input id="email" style=" font-family: Roboto sans-serif; background: #f2f2f2;  width: 100%; border: 0;  margin: 0 0 15px; padding: 15px; box-sizing: border-box; font-size: 14px;outline: 0;" placeholder="email address" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-12">
                                <input id="password" style=" font-family: Roboto sans-serif; background: #f2f2f2;  width: 100%; border: 0;  margin: 0 0 15px; padding: 15px; box-sizing: border-box; font-size: 14px;outline: 0;" placeholder="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-12">
                                <input id="password-confirm" style=" font-family: Roboto sans-serif; background: #f2f2f2;  width: 100%; border: 0;  margin: 0 0 15px; padding: 15px; box-sizing: border-box; font-size: 14px;outline: 0;" placeholder="confirm password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button class="button-62" role="button" style="margin-left:-80px;">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
