@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Course
@endsection

@section('content')
<section class="content container-fluid">
    <div class="">
        <div class="col-md-12">
            <div class="card card-default" style="background-color: #242629; color: white; border: 1px solid #1BBC9D;">
                <div class="card-header">
                    <span class="card-title" style="color: #1BBC9D; font-size: 20px;">{{ __('Update') }} Course</span>
                </div>
                <div class="card-body">
                    @includeif('partials.errors')
                    <form method="POST" action="{{ route('courses.update', $course->id) }}" role="form" enctype="multipart/form-data">
                        {{ method_field('PATCH') }}
                        @csrf

                        @include('course.form')

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
