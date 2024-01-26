<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idCourse') }}
            {{ Form::text('idCourse', $course->idCourse, ['class' => 'form-control' . ($errors->has('idCourse') ? ' is-invalid' : ''), 'placeholder' => 'Idcourse']) }}
            {!! $errors->first('idCourse', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nameCourse') }}
            {{ Form::text('nameCourse', $course->nameCourse, ['class' => 'form-control' . ($errors->has('nameCourse') ? ' is-invalid' : ''), 'placeholder' => 'Namecourse']) }}
            {!! $errors->first('nameCourse', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $course->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idUsuario') }}
            {{ Form::text('idUsuario', $course->idUsuario, ['class' => 'form-control' . ($errors->has('idUsuario') ? ' is-invalid' : ''), 'placeholder' => 'Idusuario']) }}
            {!! $errors->first('idUsuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idTech') }}
            {{ Form::text('idTech', $course->idTech, ['class' => 'form-control' . ($errors->has('idTech') ? ' is-invalid' : ''), 'placeholder' => 'Idtech']) }}
            {!! $errors->first('idTech', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>