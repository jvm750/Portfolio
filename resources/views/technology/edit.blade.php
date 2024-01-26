@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Technology
@endsection

@section('content')
<section class="content container-fluid">
    <div class="col-md-12">
        @includeif('partials.errors')

        <div class="card card-default">
            <div class="card-header" style="background-color: #242629; color: white; border: 1px solid #1BBC9D;">
                <span class="card-title" style="color: #1BBC9D; font-size: 20px;">
                    {{ __('Update') }} Technology
                </span>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('technologies.update', $technology->id) }}" role="form" enctype="multipart/form-data">
                    {{ method_field('PATCH') }}
                    @csrf

                    @include('technology.form')
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
