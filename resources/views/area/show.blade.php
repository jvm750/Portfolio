@extends('layouts.app')

@section('template_title')
    {{ $area->name ?? "{{ __('Show') Area" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Area</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('areas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idarea:</strong>
                            {{ $area->idArea }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $area->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Idusuario:</strong>
                            {{ $area->idUsuario }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
