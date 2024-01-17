@extends('layouts.app')

@section('template_title')
    {{ $proyecto->name ?? "{{ __('Show') Proyecto" }}
@endsection

@section('content')
    <section class="content container-fluid" style="background-color: #052F40;">
    <center>
    <div class="row" style="background-color: #052F40; width: 100%; height: 83vh; display: flex; justify-content: center; align-items: center; border-radius: 10px;">
            <div class="col-md-12" >
                <div class="card" style="background-color: #2D3F50; color:white; box-shadow: rgba(27, 188, 157, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset; width:700px;">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Proyecto</span>
                        </div>
                        
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $proyecto->nombre }}
                        </div><br>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $proyecto->imagen }}
                        </div><br>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $proyecto->descripcion }}
                        </div><br>
                        <div class="form-group">
                            <strong>Url:</strong>
                            {{ $proyecto->url }}
                        </div><br>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('proyectos.index') }}"> {{ __('Back') }}</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </center>
        
    </section>
@endsection
