{{-- Extiende plantilla layouts/app que se genera con el modulo auth (php artisan make:auth).
 Esta plantilla basicamente es una head con botones de login y register --}}
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2"> {{-- offset deja 2 columnas vacias a la izq para que queden centradas las 8 --}}
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Dar de alta cliente.
                    </div>

                    <div class="panel-body">
                        {!! Form::open(['route'=>'customers.store']) !!}

                        @include('customers.partials.form')

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
