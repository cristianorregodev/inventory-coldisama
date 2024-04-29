<div class="form-group mb-3">
    <label class="form-label"> {{ Form::label('product_id', 'Articulo a prestar') }}</label>
    <div>
        {{ Form::select('product_id', $products, $loan->product_id, [
            'class' => 'form-select' . ($errors->has('product_id') ? ' is-invalid' : ''),
            'placeholder' => 'Seleccione una opción',
        ]) }}
        {!! $errors->first('product_id', '<div class="invalid-feedback">Este campo es obligatorio</div>') !!}

    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label"> {{ Form::label('quantity', 'Cantidad') }}</label>
    <div>
        {{ Form::number('quantity', $loan->quantity, [
            'class' => 'form-control' . ($errors->has('quantity') ? ' is-invalid' : ''),
            'placeholder' => 'Cantidad',
        ]) }}
        {!! $errors->first('quantity', '<div class="invalid-feedback">Este campo es obligatorio</div>') !!}

    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label"> {{ Form::label('delivered_to', 'Entregado a') }}</label>
    <div>
        {{ Form::select('delivered_to', $clients, $loan->delivered_to, [
            'class' => 'form-select' . ($errors->has('delivered_to') ? ' is-invalid' : ''),
            'placeholder' => 'Seleccione una opción',
        ]) }}
        {!! $errors->first('delivered_to', '<div class="invalid-feedback">Este campo es obligatorio</div>') !!}

    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label"> {{ Form::label('status', 'Entra/Sale') }}</label>
    <div>
        {{ Form::select('status', ['Entró' => 'Entró', 'Salió' => 'Salió'], $loan->status, [
            'class' => 'form-select' . ($errors->has('status') ? ' is-invalid' : ''),
            'placeholder' => 'Seleccione una opción',
        ]) }}
        {!! $errors->first('status', '<div class="invalid-feedback">Este campo es obligatorio</div>') !!}

    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label"> {{ Form::label('loan_date', 'Fecha y hora salida') }}</label>
    <div>
        {{ Form::datetimeLocal('loan_date', $loan->loan_date, [
            'class' => 'form-control' . ($errors->has('loan_date') ? ' is-invalid' : ''),
            'placeholder' => 'Loan Date',
        ]) }}
        {!! $errors->first('loan_date', '<div class="invalid-feedback">Este campo es obligatorio</div>') !!}

    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label"> {{ Form::label('return_date', 'Fecha y hora entrada') }}</label>
    <div>
        {{ Form::datetimeLocal('return_date', $loan->return_date, [
            'class' => 'form-control' . ($errors->has('return_date') ? ' is-invalid' : ''),
            'placeholder' => 'Return Date',
        ]) }}
        {!! $errors->first('return_date', '<div class="invalid-feedback">:message</div>') !!}

    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label"> {{ Form::label('observations', 'Observaciones') }}</label>
    <div>
        {{ Form::textarea('observations', $loan->observations, [
            'class' => 'form-control' . ($errors->has('observations') ? ' is-invalid' : ''),
            'placeholder' => 'Obseración',
            'rows' => '3',
            'style' => 'resize: none;',
        ]) }}
        {!! $errors->first('observations', '<div class="invalid-feedback">:message</div>') !!}

    </div>
</div>


<div class="form-footer">
    <div class="text-end">
        <div class="d-flex">
            <a href="{{ route('loans.index') }}" class="btn btn-danger">Cancelar</a>
            <button type="submit" class="btn btn-primary ms-auto ajax-submit">Guardar</button>
        </div>
    </div>
</div>
