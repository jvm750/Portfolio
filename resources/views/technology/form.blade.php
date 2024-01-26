<div class="box box-info padding-1" style="background-color: #242629; color: white; ">
    <div class="box-body">
        
        <div class="form-group" style="padding: 15px;">
            {{ Form::label('Version', null, ['style' => 'color: #1BBC9D;']) }}
            {{ Form::text('Version', $technology->Version, ['class' => 'form-control' . ($errors->has('Version') ? ' is-invalid' : ''), 'placeholder' => 'Version']) }}
            {!! $errors->first('Version', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" style="background-color: #1BBC9D; color: white; font-weight: bold; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; transition: background-color 0.3s ease;" onmouseover="this.style.backgroundColor='#16161A'; this.style.color='#1BBC9D'" onmouseout="this.style.backgroundColor='#1BBC9D'; this.style.color='white'" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
