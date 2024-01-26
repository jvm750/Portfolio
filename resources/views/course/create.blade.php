@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Course
@endsection

@section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card" style="background-color: #242629; color: white; border: 1px solid #1BBC9D;">
                <div class="card-header">
                    <span class="card-title" style="color: #1BBC9D; font-size: 20px;">{{ __('Create') }} Course</span>
                </div>
                <div class="card-body">
                    @includeif('partials.errors')
                    <form method="POST" action="{{ route('courses.store') }}" role="form" enctype="multipart/form-data">
                        @csrf

                        @include('course.form')

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
