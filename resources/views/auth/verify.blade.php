@extends('layouts.app')

@section('content')
<div class="container" style="background-color: #052F40; width: 100%; height: 83vh; display: flex; justify-content: center; align-items: center; border-radius: 10px;">
    <div class="row justify-content-center" >
        <div class="col-md-8" >
            <div class="card" >
                <div class="card-header" >{{ __('Verify Your Email Address') }}</div>

                <div class="card-body" style="background-color: #2D3F50; color:white; box-shadow: rgba(27, 188, 157, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
