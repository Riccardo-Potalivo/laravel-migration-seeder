@extends('layouts.app')

@section('title', 'Trains')

@section('content')

    <section class="container">
        <h1>Trains</h1>
        <div class="row">
            @foreach ($trains as $train)
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Azienda: {{ $train->azienda }}</h5>
                            <p class="card-text">Stazione: {{ $train->station }}</p>
                            <p class="card-text">Stazione di partenza: {{ $train->departure_station }}</p>
                            <p class="card-text">Stazione di arrivo: {{ $train->arrival_station }}</p>
                            <p class="card-text">Oraio di partenza: {{ $train->departure_time }}</p>
                            <p class="card-text">Orario di arrivo: {{ $train->arrival_time }}</p>
                            <p class="card-text">Codice treno: {{ $train->train_code }}</p>
                            <p class="card-text">Numero carrozza: {{ $train->carriage_number }}</p>
                            <p class="card-text">In orario: {{ $train->on_time ? 'Si' : 'No' }}</p>
                            <p class="card-text">Cancellato: {{ $train->deleted ? 'Si' : 'No' }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

@endsection
