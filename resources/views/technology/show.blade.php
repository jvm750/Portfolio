@extends('layouts.app')

@section('template_title')
    {{ $technology->name ?? "{{ __('Show') Technology" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Technology</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('technologies.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Version:</strong>
                            {{ $technology->Version }}
                        </div>
                        <div class="form-group">
                            <strong>Idusuario:</strong>
                            {{ $technology->idUsuario }}
                        </div>
                        <div class="form-group">
                            <strong>Idcourse:</strong>
                            {{ $technology->idCourse }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
