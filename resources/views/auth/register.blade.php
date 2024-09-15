@extends('layouts.app')

@section('content')

    <body class="hold-transition register-page">
        <center>
            <div class="register-box">
                <div class="card card-outline card-primary">
                    <div class="card-header text-center">

                        <a href="../../index2.html" class="h1"><b>GatePass</b>LTE</a>
                    </div>
                    <div class="card-body">
                        <p class="login-box-msg">Register a new membership</p>
                        @if ($errors->any())
                            <div class="text-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form id="quickForm" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group row">
                                {{-- hidden input for type of user --}}
                                <input type="hidden" class="form-control" placeholder="Full name" name="type"
                                    value="{{ request()->id }}" required autocomplete="name">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Full name" @error('name')
                                        is-invalid @enderror" name="name" value="{{ old('name') }}" required
                                        autocomplete="name" autofocus>
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-user"></span>
                                        </div>
                                    </div>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="input-group mb-3">
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email"
                                        @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                                        required autocomplete="email">
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
                                    <input type="password" class="form-control" id="exampleInputPassword1"
                                        placeholder="Password" @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">
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
                            <div class="form-group row">
                                <div class="input-group mb-3">
                                    <input type="password" class="form-control" placeholder="Retype password"
                                        name="password_confirmation" required autocomplete="new-password">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-lock"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-8">
                                        <div class="form-group mb-0">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                                                <label class="custom-control-label" for="exampleCheck1">I agree to the <a href="#">terms </a>.</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-4">

                                        <button type="submit" class="btn btn-primary">
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
            @include('partials.loginfooter')

        @endsection
