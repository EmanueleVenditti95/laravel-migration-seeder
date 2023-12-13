@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">{{$title}} :</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Compagnia</th>
                <th>Stazione Partenza</th>
                <th>Stazione Arrivo</th>
                <th>Orario Partenza</th>
                <th>Orario Arrivo</th>
                <th>Codice Treno</th>
                <th>Stato</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
                <tr>
                    <td>{{$train->company}}</td>
                    <td>{{$train->departure_station}}</td>
                    <td>{{$train->arrival_station}}</td>
                    <td>{{$train->departure_time}}</td>
                    <td>{{$train->arrival_time}}</td>
                    <td>{{$train->train_code}}</td>
                    <td>
                        @if ($train->on_time) In Orario
                        @elseif($train->cancelled) Cancellato
                        @elseif(!$train->on_time) In ritardo
                        @endif 
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection