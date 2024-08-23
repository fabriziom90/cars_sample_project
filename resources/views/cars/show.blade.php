@extends('layouts.layout')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2>Dettaglio auto</h2>
            </div>
            <div class="col-12">
                <ul class="list-unstyled">
                    <li>
                        @if ($car->image_path != null)
                            <img src="{{ asset('/storage/' . $car->iamge_path) }}" alt="{{ $car->model_name }}">
                        @else
                            <img src="https://placehold.co/300" alt="">
                        @endif
                    </li>
                    <li><strong>Nome: </strong>{{ $car->model_name }}</li>
                    <li><strong>Prezzo: </strong>{{ $car->price }}</li>
                    <li><strong>Usata:</strong> {{ $car->used ? 'Sì' : 'No' }}</li>
                    <li><strong>Km:</strong>{{ $car->km }}</li>
                    @if ($car->ports_number != null)
                        <li><strong>Numero Porte</strong>{{ $car->ports_number }}</li>
                    @endif
                    <li><strong>Cilindrata:</strong>{{ $car->cubic_capacity }}</li>
                    <li><strong>Tipologia cambio:</strong>{{ $car->transmission }}</li>
                    <li><strong>Tipologia alimentazione</strong>{{ $car->power_supply }}</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
