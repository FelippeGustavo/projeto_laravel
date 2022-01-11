@extends('layouts.main')
<!-- SERVE PARA IMPORTAR O CORPO DO HTML DO CÓDIGO -->
@section('title', 'Edge Events')
@section('content')
    
        <h1> Titulo</h1>
        <img src="/img/Banner.jpg">
        @if ($nome != "Felippe")
        <h1 style="text-align: center">ERROR!!!  <br> USUÁRIO NÃO IDENTIFICADO!</h1>
        @elseif($nome == "Felippe")
        <h1  style="text-align: center" >Olá {{ $nome }}</h1>
            
       
        @endif

        @for($i=0;$i< count($arr);$i++)
        <h1  style="text-align: center">{{ $arr[$i] }} - {{ $i }}</h1>
        @endfor
    @endsection
