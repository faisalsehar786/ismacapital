@extends('frontLayout')

@section('title', 'ismcapitals')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8 ">
         
                <div class="card shadow-lg border-0 px-3" style="border-radius: 15px;">
                <h4 class=" text-center font-weight-bolder pt-3 text-success pb-3">{{ __('Login') }}</h4>

                {{-- success message display --}}

@if(session('message'))

<div class="alert alert-success alert-dismissible">

  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

  <strong>Success!</strong> {{ session('message') }}

</div>

@endif



{{-- error message display if company added --}}

@if(session('error'))

<div class="alert alert-danger alert-dismissible">

  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

  <strong>Alert!</strong> {{ session('error') }}

</div>

@endif
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

                        <div class="form-group row mb-3">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn-outline-primary  btn-lg text-white font-weight-bold shadow-lg text-decoration-none" style="background-color: #BC873C;
                                border: 1px solid orange;
                                border-radius: 27px;">
                                    {{ __('Login') }}
                                </button>

                            <a href="/register" class="btn-outline-primary  btn-lg text-white font-weight-bold shadow-lg text-decoration-none" style="background-color:#28a745!important;
                                border: 1px solid orange;
                                border-radius: 27px;">
                                 {{ __('Register') }}
                                </a>

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
@endsection
