<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_productos') }}
            {{ Form::select('id_productos', $productos,$compra->id_productos, ['class' => 'form-control' . ($errors->has('id_productos') ? ' is-invalid' : ''), 'placeholder' => 'Id Productos']) }}
            {!! $errors->first('id_productos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_proveedores') }}
            {{ Form::select('id_proveedores', $proveedores,$compra->id_proveedores, ['class' => 'form-control' . ($errors->has('id_proveedores') ? ' is-invalid' : ''), 'placeholder' => 'Id Proveedores']) }}
            {!! $errors->first('id_proveedores', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio') }}
            {{ Form::text('precio', $compra->precio, ['class' => 'form-control' . ($errors->has('precio') ? ' is-invalid' : ''), 'placeholder' => 'Precio']) }}
            {!! $errors->first('precio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantidad') }}
            {{ Form::text('cantidad', $compra->cantidad, ['class' => 'form-control' . ($errors->has('cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
            {!! $errors->first('cantidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>