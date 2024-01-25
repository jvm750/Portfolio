@extends('layouts.app')

@section('template_title')
    {{ $proyecto->name ?? "{{ __('Show') Proyecto" }}
@endsection

@section('content')
    <section class="content container-fluid" style="background-color: #242629;">
    <center>
    <div class="row" style="background-color: #16161A; width: 100%; height: 83vh; display: flex; justify-content: center; align-items: center; border-radius: 10px;">
            <div class="col-md-12" >
                <div class="card" style="background-color: #242629;border: 1px solid #1BBC9D; color:white; width:700px;">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title" style="color:#1BBC9D;font-size:20px">{{ __('Show') }} Project</span>
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
                        
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('proyectos.index') }}" style="background-color: #1BBC9D; color: white; padding: 12px 22px; border: 2px solid #1BBC9D; border-radius: 8px; cursor: pointer; transition: background-color 0.3s ease, border 0.3s ease;"
        onmouseover="this.style.backgroundColor='#16161A'; this.style.border='#16161A';"
        onmouseout="this.style.backgroundColor='#1BBC9D'; this.style.border='#1BBC9D';"
        class="btn btn-primary"> {{ __('Back') }}</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </center>
        
    </section>
@endsection
