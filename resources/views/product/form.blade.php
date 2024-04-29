<div class="form-group mb-3">
    <label class="form-label"> {{ Form::label('name', 'Nombre del articulo') }}</label>
    <div>
        {{ Form::text('name', $product->name, [
            'class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''),
            'placeholder' => 'Nombre del articulo',
        ]) }}
        {!! $errors->first('name', '<div class="invalid-feedback">Este campo es obligatorio</div>') !!}

    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label"> {{ Form::label('description', 'Detalle del articulo') }}</label>
    <div>
        {{ Form::text('description', $product->description, [
            'class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''),
            'placeholder' => 'Detalle del articulo',
        ]) }}
        {!! $errors->first('description', '<div class="invalid-feedback">Este campo es obligatorio</div>') !!}
        <small class="form-hint">product <b>description</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label"> {{ Form::label('stock', 'Cantidad') }}</label>
    <div>
        {{ Form::text('stock', $product->stock, [
            'class' => 'form-control' . ($errors->has('stock') ? ' is-invalid' : ''),
            'placeholder' => 'Cantidad',
        ]) }}
        {!! $errors->first('stock', '<div class="invalid-feedback">Este campo es obligatorio</div>') !!}
        <small class="form-hint">product <b>stock</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label"> {{ Form::label('state', 'Estado del articulo') }}</label>
    <div>
        {{ Form::select(
            'state',
            ['Nuevo' => 'Nuevo', 'Usado' => 'Usado', 'Averiado' => 'Averiado', 'Incompleto' => 'Incompleto'],
            $product->state,
            ['class' => 'form-select' . ($errors->has('state') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione una opción'],
        ) }}
        {!! $errors->first('state', '<div class="invalid-feedback">Este campo es obligatorio</div>') !!}
        <small class="form-hint">product <b>state</b> instruction.</small>
    </div>
</div>

<div class="form-footer">
    <div class="text-end">
        <div class="d-flex">
            <a href="{{ route('products.index') }}" class="btn btn-danger">Cancel</a>
            <button type="submit" class="btn btn-primary ms-auto ajax-submit">Submit</button>
        </div>
    </div>
</div>
