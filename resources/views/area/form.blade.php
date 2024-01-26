<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idArea') }}
            {{ Form::text('idArea', $area->idArea, ['class' => 'form-control' . ($errors->has('idArea') ? ' is-invalid' : ''), 'placeholder' => 'Idarea']) }}
            {!! $errors->first('idArea', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $area->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idUsuario') }}
            {{ Form::text('idUsuario', $area->idUsuario, ['class' => 'form-control' . ($errors->has('idUsuario') ? ' is-invalid' : ''), 'placeholder' => 'Idusuario']) }}
            {!! $errors->first('idUsuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>