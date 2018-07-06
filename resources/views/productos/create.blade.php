<h3>Ingreso de nuevo producto</h3>

{!! Form::open(['route'=>'productos.store', 'files'=>true]) !!} {{-- files=>true indica que se puedan enviar archivos desde el form --}}

{{-- Campo de texto para descripcion del producto --}}
{{ Form::label('descripcion', 'Descripción del producto') }}
{{ Form::text('descripcion', null, ['id'=>'descripcion']) }} <br>

{{-- Selector de archivos para imagen --}}
{{ Form::label('imagen', 'Imagen')  }}
{{ Form::file('imagen') }} <br>

{{-- Campo de texto para el precio del producto --}}
{{  Form::label('precio', 'Precio') }}
{!! Form::number('fuel',null,['step'=>'any']) !!} <br>

{{-- Boton de submit --}}
{{ Form::submit('Guardar', []) }}

{!! Form::close() !!}