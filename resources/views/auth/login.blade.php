@extends('layouts.app')

@section('content')

<body class="hold-transition login-page">
<div class="login-box">

    <div class="card card-outline card-primary">
      <div class="card-header text-center">
            <div class="card-header">{{ __('Login') }}</div>
            <a href="../../index2.html" class="h1"><b>GatePass</b></a>
            <div class="card-body">
                <form id="quickForm" method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group row">

                        <div class="input-group mb-3">
                            <input type="email"  id="exampleInputEmail1" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">


                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>

                            </div>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                    </div>

                    <div class="form-group row">

                        <div class="input-group mb-3">
                            <input  type="password" id="exampleInputPassword1" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                          <div class="input-group-append">
                            <div class="input-group-text">
                              <span class="fas fa-lock"></span>
                            </div>
                          </div>
                          @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror


                        </div>
                    </div>

                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                  Remember Me
                                </label>
                              </div>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">
                                {{ __('Login') }}
                            </button>
                        </div>
                        <div class="row">
                            @if (Route::has('password.request'))
                                <a  href="{{ route('password.request') }}"><label class="label d-flex">
                                    {{ __('Forgot Your Password?') }}
                                </label></a>
                            @endif

                        </div>

                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div>
  </div>


@include('partials.loginfooter')

@endsection
