@extends('layouts.main')
<!-- SERVE PARA IMPORTAR O CORPO DO HTML DO CÓDIGO -->
@section('title', 'Edge Events')
@section('content')

<h1>PRODUTOS EM DESTAQUE</h1>
@if($busca !='')
<h1>Você está buscando por: {{ $busca }}</h1>
@endif
@endsection