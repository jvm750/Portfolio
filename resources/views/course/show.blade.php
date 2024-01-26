@extends('layouts.app')

@section('template_title')
    {{ $course->name ?? "{{ __('Show') Course" }}
@endsection

@section('content')
   <!-- Show Technology -->
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card" style="background-color: #242629; border: 1px solid #1BBC9D; color: white;">
                <div class="card-header">
                    <div class="float-left">
                        <span class="card-title" style="color: #1BBC9D; font-size: 20px;">
                            {{ __('Show') }} Technology
                        </span>
                    </div>
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('technologies.index') }}" style="background-color: #1BBC9D; color: white; padding: 12px 22px; border: 2px solid #1BBC9D; border-radius: 8px; cursor: pointer; transition: background-color 0.3s ease, border 0.3s ease;" onmouseover="this.style.backgroundColor='#16161A'; this.style.border='#16161A';" onmouseout="this.style.backgroundColor='#1BBC9D'; this.style.border='#1BBC9D';">
                            {{ __('Back') }}
                        </a>
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

<!-- Show Course -->
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
