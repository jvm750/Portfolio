<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Version') }}
            {{ Form::text('Version', $technology->Version, ['class' => 'form-control' . ($errors->has('Version') ? ' is-invalid' : ''), 'placeholder' => 'Version']) }}
            {!! $errors->first('Version', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idUsuario') }}
            {{ Form::text('idUsuario', $technology->idUsuario, ['class' => 'form-control' . ($errors->has('idUsuario') ? ' is-invalid' : ''), 'placeholder' => 'Idusuario']) }}
            {!! $errors->first('idUsuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idCourse') }}
            {{ Form::text('idCourse', $technology->idCourse, ['class' => 'form-control' . ($errors->has('idCourse') ? ' is-invalid' : ''), 'placeholder' => 'Idcourse']) }}
            {!! $errors->first('idCourse', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>