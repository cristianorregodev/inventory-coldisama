<div class="form-group mb-3">
    <label class="form-label"> {{ Form::label('name', 'Nombre Completo') }}</label>
    <div>
        {{ Form::text('name', $client->name, [
            'class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''),
            'placeholder' => 'Nombre completo',
        ]) }}
        {!! $errors->first('name', '<div class="invalid-feedback">Este campo es obligatorio</div>') !!}

    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label"> {{ Form::label('email', 'Correo electrónico') }}</label>
    <div>
        {{ Form::text('email', $client->email, [
            'class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''),
            'placeholder' => 'Correo electrónico',
        ]) }}
        {!! $errors->first('email', '<div class="invalid-feedback">Este campo es obligatorio</div>') !!}

    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label"> {{ Form::label('role', 'Rol (Ocupación)') }}</label>
    <div>
        {{ Form::select(
            'role',
            ['Profesor' => 'Profesor', 'Administrativo' => 'Administrativo', 'Estudiante' => 'Estudiante', 'Otro' => 'Otro'],
            $client->role,
            [
                'class' => 'form-select' . ($errors->has('role') ? ' is-invalid' : ''),
                'placeholder' => 'Seleccione una opción',
            ],
        ) }}
        {!! $errors->first('role', '<div class="invalid-feedback">Este campo es obligatorio</div>') !!}

    </div>
</div>

<div class="form-footer">
    <div class="text-end">
        <div class="d-flex">
            <a href="{{ route('clients.index') }}" class="btn btn-danger">Cancelar</a>
            <button type="submit" class="btn btn-primary ms-auto ajax-submit">Guardar</button>
        </div>
    </div>
</div>
