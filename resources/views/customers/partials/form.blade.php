{{-- Parte del form para los campos (customer). Para reutilizar en las vistas
    create y edit --}}
<div class="form-group">
    {{Form::label('name', 'Cliente:')}}
    {{Form::text('name', null, ['class'=>'form-control', 'id'=>'name'])}}
</div>
<div class="form-group">
    {{Form::label('document', 'Documento:')}}
    {{Form::text('document', null, ['class'=>'form-control', 'id'=>'document'])}}
</div>
<div class="form-group">
    {{Form::label('phone', 'Teléfono:')}}
    {{Form::text('phone', null, ['class'=>'form-control', 'id'=>'phone'])}}
</div>
<div class="form-group">
    {{Form::label('address', 'Dirección:')}}
    {{Form::text('address', null, ['class'=>'form-control', 'id'=>'address'])}}
</div>

<div class="form-group">
    {{Form::submit('Registrar', ['class'=>'btn btn-sm btn-primary'])}}
</div>