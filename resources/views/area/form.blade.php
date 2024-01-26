<div class="box box-info padding-1" style="background-color: #242629; color: white; ">
    <div class="box-body">
        
        <div class="form-group" style="padding: 15px;">
            {{ Form::label('idArea', null, ['style' => 'color: #1BBC9D;']) }}
            {{ Form::text('idArea', $area->idArea, ['class' => 'form-control' . ($errors->has('idArea') ? ' is-invalid' : ''), 'placeholder' => 'Idarea']) }}
            {!! $errors->first('idArea', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group" style="padding: 15px;">
            {{ Form::label('descripcion', null, ['style' => 'color: #1BBC9D;']) }}
            {{ Form::text('descripcion', $area->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group" style="padding: 15px;">
            {{ Form::label('idUsuario', null, ['style' => 'color: #1BBC9D;']) }}
            {{ Form::text('idUsuario', $area->idUsuario, ['class' => 'form-control' . ($errors->has('idUsuario') ? ' is-invalid' : ''), 'placeholder' => 'Idusuario']) }}
            {!! $errors->first('idUsuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" style="background-color: #1BBC9D; color: white; font-weight: bold; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; transition: background-color 0.3s ease;" onmouseover="this.style.backgroundColor='#16161A'; this.style.color='#1BBC9D'" onmouseout="this.style.backgroundColor='#1BBC9D'; this.style.color='white'" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
