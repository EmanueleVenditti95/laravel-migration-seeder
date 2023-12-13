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
                <th>In orario</th>
                <th>Cancellato</th>
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
                    <td>{{$train->on_time}}</td>
                    <td>{{$train->cancelled}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection