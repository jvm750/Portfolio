<div class="box box-info ">
    <div class="box-body" style="padding: 5px;">
        
        <div class="form-group" style="padding: 15px" >
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $proyecto->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group" style="padding: 15px">
        {{ Form::label('imagen') }}
        <label for="imagen" class="custom-file-upload">
            <i class="fa fa-cloud-upload"></i> Elegir archivo
        </label>
        {{ Form::file('imagen', ['id' => 'imagen', 'class' => 'inputfile' . ($errors->has('imagen') ? ' is-invalid' : ''), 'placeholder' => 'Imagen']) }}
        {!! $errors->first('imagen', '<div class="invalid-feedback">:message</div>') !!}
    </div>
        <div class="form-group" style="padding: 15px">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $proyecto->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <br>
        <button type="submit" 
        style="background-color: #1BBC9D; color: white; font-weight: bold; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; transition: background-color 0.3s ease;" onmouseover="this.style.backgroundColor='#16161A'; this.style.color='#1BBC9D'" onmouseout="this.style.backgroundColor='#1BBC9D'; this.style.color='white'" class="btn btn-primary"
        class="btn btn-primary">
    {{ __('Submit') }}
</button>
    </div>
</div>