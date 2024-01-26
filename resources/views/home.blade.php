@extends('layouts.app')

@section('content')
<div class="container" style="height: 100vh; display: flex; justify-content: center; align-items: center;">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" style="width: 400px;">
                <div class="card-body text-center" style="background-color: #1BBC9D; color: white; font-weight: bold; padding: 20px; border: none; border-radius: 5px; cursor: pointer; transition: background-color 0.3s ease; font-size: 24px;" onmouseover="this.style.backgroundColor='#16161A'; this.style.color='#1BBC9D'" onmouseout="this.style.backgroundColor='#1BBC9D'; this.style.color='white'">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }} <i class="fa-solid fa-thumbs-up"></i>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
