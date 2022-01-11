@extends('layouts.main')
<!-- SERVE PARA IMPORTAR O CORPO DO HTML DO CÓDIGO -->
@section('title', 'Produto')
@section('content')

@if($id!=null)

<p>Exibir produto id: {{ $id }}</p>
@endif
@endsection