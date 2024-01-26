@extends('layouts.app')

@section('content')
<div class="container" style="background-color: #16161A;display: flex; justify-content: center; align-items: center;">
<div class="row justify-content-center" style="background-color: #16161A; width: 100%; height: 83vh; display: flex; justify-content: center; align-items: center; border-radius: 10px;">
        <div class="col-md-8" style="display: flex; justify-content: center; align-items: center;">
            <div class="card" style="background-color: #242629; color:white;border: 1px solid #1BBC9D; width:50%; height:400px">
                <center><div class="card-header" style="font-size: 24px; color: #1BBC9D; font-weight: bold; transition: color 0.3s;" onmouseover="this.style.color='white'" onmouseout="this.style.color='#1BBC9D'">{{ __('Login') }}</div></center>

                <div class="card-body" >
                    <br>
                    <form method="POST" action="{{ route('login') }}" >
                        @csrf

                        <div class="mb-3">
                        <label for="email" class="form-label" >{{ __('Email Address') }}</label><br>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror " name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>

                        <div class="mb-3">
                        <label for="password" class="form-label">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>

                        <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
                        </div>
                        </div>

                        <div class="mb-0">
                        <button type="submit" style="background-color: #1BBC9D; color: white; font-weight: bold; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; transition: background-color 0.3s ease;" onmouseover="this.style.backgroundColor='#16161A'; this.style.color='#1BBC9D'" onmouseout="this.style.backgroundColor='#1BBC9D'; this.style.color='white'" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a style="color: #1BBC9D; text-decoration: none;" onmouseover="this.style.color='#FFFEFE'" onmouseout="this.style.color='#1BBC9D'" class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                        </div>
                    </form>
                    
                    </div>
            </div>
            
        </div>
        
    </div>
</div>
@endsection
