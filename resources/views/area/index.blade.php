@extends('layouts.app')

@section('template_title')
    Area
@endsection

@section('content')
<div class="container-fluid" style="background-color: #16161A; width: 100%; height: 83vh; border-radius: 10px; padding-top: 10px;">
    <div class="row">
        <div class="col-sm-12">
            <div class="card" style="background-color: #242629; color: white; padding-top: 10px; border: 1px solid #1BBC9D;">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span id="card_title" style="color: #1BBC9D; font-size: 20px;">
                            {{ __('Area') }}
                        </span>
                        <div class="float-right">
                            <a href="{{ route('areas.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                {{ __('Create New') }}
                            </a>
                        </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>
                                    <th>No</th>
                                    <th>Idarea</th>
                                    <th>Descripcion</th>
                                    <th>Idusuario</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($areas as $area)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $area->idArea }}</td>
                                    <td>{{ $area->descripcion }}</td>
                                    <td>{{ $area->idUsuario }}</td>
                                    <td>
                                        <div class="d-flex justify-content-center mt-2">
                                            <form action="{{ route('areas.destroy', $area->id) }}" method="POST">
                                                <a class="btn btn-sm btn-primary" href="{{ route('areas.show', $area->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                <a class="btn btn-sm btn-success" href="{{ route('areas.edit', $area->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $areas->links() !!}
        </div>
    </div>
</div>

@endsection
