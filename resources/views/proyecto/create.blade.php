@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Proyecto
@endsection

@section('content')
    <section class="content container-fluid" style="background-color: #052F40;">
        <div class="row" style="background-color: #052F40; width: 100%; height: 83vh; display: flex; justify-content: center; align-items: center; border-radius: 10px;">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default" style="background-color: #2D3F50; color:white; box-shadow: rgba(27, 188, 157, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Proyecto</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('proyectos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('proyecto.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
