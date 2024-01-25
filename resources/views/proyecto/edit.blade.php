@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Proyecto
@endsection

@section('content')
    <section class="content container-fluid" style="background-color: #16161A;">
        <div class="" style="background-color: #16161A; width: 100%; height: 83vh; display: flex; justify-content: center; align-items: center; border-radius: 10px;">
            <div class="col-md-12" style="">

                @includeif('partials.errors')
                
                <div class="card card-default " style="background-color: #242629; color:white;border: 1px solid #1BBC9D;">
                    <div class="card-header">
                        <span class="card-title" style="color:#1BBC9D;font-size:20px">{{ __('Update') }} Project</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('proyectos.update', $proyecto->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('proyecto.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
