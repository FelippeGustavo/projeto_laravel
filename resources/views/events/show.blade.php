@extends('layouts.main')
<!-- SERVE PARA IMPORTAR O CORPO DO HTML DO CÓDIGO -->
@section('title', 'Edge Events')
@section('content')

<div class="col-md-10 offset-md-1">
    <div class="row">
        <div id="image-container" class="col-md-6">
            <img src="/img/events/{{ $event->image }}" class="img-fluid" alt="{{ $event->title }}">
        </div>
        <div id="info-container" class="col-md-6">
            <h1>{{ $event->title }}</h1>
            <p class="event-city"><ion-icon name="location-outline"></ion-icon>{{ $event->city }}</p>
            <p class="events-participants"><ion-icons name="people-outline"></ion-icons>x Participantes</p>
            <p class="event-owner"><ion-icon name=star-outline></ion-icon>Dono do Evento</p>
            <a href="#" class="bnt bnt-primary" id="event-submit">Confirmar Presença</a>
        </div>
    <div class="col-md-12" id="description-conteiner">
        <h3>Sobre o Evento:</h3>
        <p class="event-description">{{ $event->description }}</p>
    </div>
    </div>
</div>

@endsection