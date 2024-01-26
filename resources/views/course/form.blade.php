<div class="box box-info padding-1" style="background-color: #242629; color: white;">
    <div class="box-body">
        
        <div class="form-group" style="padding: 15px;">
            {{ Form::label('idCourse', null, ['style' => 'color: #1BBC9D;']) }}
            {{ Form::text('idCourse', $course->idCourse, ['class' => 'form-control' . ($errors->has('idCourse') ? ' is-invalid' : ''), 'placeholder' => 'Idcourse']) }}
            {!! $errors->first('idCourse', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group" style="padding: 15px;">
            {{ Form::label('nameCourse', null, ['style' => 'color: #1BBC9D;']) }}
            {{ Form::text('nameCourse', $course->nameCourse, ['class' => 'form-control' . ($errors->has('nameCourse') ? ' is-invalid' : ''), 'placeholder' => 'Namecourse']) }}
            {!! $errors->first('nameCourse', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group" style="padding: 15px;">
            {{ Form::label('descripcion', null, ['style' => 'color: #1BBC9D;']) }}
            {{ Form::text('descripcion', $course->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        
    </div>
    <div class="box-footer mt20">
        <button type="submit" style="background-color: #1BBC9D; color: white; font-weight: bold; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; transition: background-color 0.3s ease;" onmouseover="this.style.backgroundColor='#16161A'; this.style.color='#1BBC9D'" onmouseout="this.style.backgroundColor='#1BBC9D'; this.style.color='white'" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
