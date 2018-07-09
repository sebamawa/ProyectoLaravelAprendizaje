{{-- Extiende plantilla layouts/app que se genera con el modulo auth (php artisan make:auth).
 Esta plantilla basicamente es una head con botones de login y register --}}
@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row  justify-content-center">
        <div class="col-10">

            <div class="card">
                <div class="card-header">
                    Lista de clientes: <span id="customers_total">{{ $customers->count() }} </span> registros
                    @guest
                    @else
                        <a href="{{ route('customers.create') }}" class="btn btn-primary float-right">
                            Crear
                        </a>
                    @endguest
                </div>
                <div class="body">
                    @foreach($customers as $customer)
                        {{$customer->name}}<br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection