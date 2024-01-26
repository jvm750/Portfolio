@extends('layouts.app')

@section('template_title')
    {{ $course->name ?? "{{ __('Show') Course" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Course</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('courses.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idcourse:</strong>
                            {{ $course->idCourse }}
                        </div>
                        <div class="form-group">
                            <strong>Namecourse:</strong>
                            {{ $course->nameCourse }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $course->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Idusuario:</strong>
                            {{ $course->idUsuario }}
                        </div>
                        <div class="form-group">
                            <strong>Idtech:</strong>
                            {{ $course->idTech }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
