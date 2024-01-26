@extends('layouts.app')

@section('content')
<div class="container" style="width:60%; height:990px; justify-content: center; align-items: center;">
    <div class="row justify-content-center" >
        <div class="col-md-8" >
            <div class="card" style="background-color: #242629 ;height:200px;border:1px solid #1BBC9D;" >
            <center><div class="card-header" style="font-size: 24px; color: #1BBC9D; font-weight: bold; transition: color 0.3s;" onmouseover="this.style.color='white'" onmouseout="this.style.color='#1BBC9D'">{{ __('Reset Password') }}</div></center>
                

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end" style="font-size: 14px; color: #1BBC9D; transition: color 0.3s;" onmouseover="this.style.color='white'" onmouseout="this.style.color='#1BBC9D'">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="background-color: #1BBC9D; color: white; font-weight: bold; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; transition: background-color 0.3s ease;" onmouseover="this.style.backgroundColor='#16161A'; this.style.color='#1BBC9D'" onmouseout="this.style.backgroundColor='#1BBC9D'; this.style.color='white'">
                                    {{ __('Send Password Reset Link') }}
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
