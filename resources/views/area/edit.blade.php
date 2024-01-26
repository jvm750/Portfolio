@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Area
@endsection

@section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">

            @includeif('partials.errors')

            <div class="card card-default" style="background-color: #242629; color: white; border: 1px solid #1BBC9D;">
                <div class="card-header">
                    <span class="card-title" style="color: #1BBC9D; font-size: 20px;">
                        {{ __('Update') }} Area
                    </span>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('areas.update', $area->id) }}" role="form" enctype="multipart/form-data">
                        {{ method_field('PATCH') }}
                        @csrf

                        @include('area.form')

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
