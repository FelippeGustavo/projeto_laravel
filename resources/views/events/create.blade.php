@extends('layouts.main')
<!-- SERVE PARA IMPORTAR O CORPO DO HTML DO CÓDIGO -->
@section('title', 'Edge Events')
@section('content')
<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1 style="text-align:center ">PREENCHA O EVENTO </h1>
    <form action="/events" method="POST" enctype="multipart/form-data">

      @csrf
      <div class="form-group">
        <label for="image">Evento:</label>
        <input type="file" id="image" name="image" class="form-control-file ">
      </div>
      <div class="form-group">
        <label for="title">Evento:</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento" required>
      </div>
      <div class="form-group">
        <label for="title">Cidade:</label>
        <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento" required>
      </div>
      <div class="form-group">
        <label for="title">O evento é privado?</label>
        <select name="private" id="private" class="form-control">
            <p >Selecione</p>
          <option value="0">Não</option >
          <option value="1">Sim</option > 
        </select>
      </div>
      <div class="form-group">
        <label for="title">Descrição:</label>
        <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?" required></textarea>
      </div>
      <input type="submit" class="btn btn-primary botao_evento" value="Criar Evento">
    </form>
  </div>
@endsection