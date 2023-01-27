<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre_estado') }}
            {{ Form::text('nombre_estado', $estado->nombre_estado, ['class' => 'form-control' . ($errors->has('nombre_estado') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Estado']) }}
            {!! $errors->first('nombre_estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>