@extends('layouts.app')

@section('content')
<h1>Editar Heroe</h1>
<form action="{{ route( 'admin.heroes.update' , ['id' => $hero->id] ) }}" method="post">
  <div class="form-group">
    <label for="exampleFormControlInput1">Nombre</label>
    <input type="text" class="form-control" id="" value="{{ $hero->name }}" name="nombre">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">HP</label>
    <input type="number" class="form-control" id="" value="{{ $hero->hp }}" name="hp">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Ataque</label>
    <input type="number" class="form-control" id="" value="{{ $hero->attack }}" name="ataque">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Defensa</label>
    <input type="number" class="form-control" id="" value="{{ $hero->defense }}" name="defensa">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Suerte</label>
    <input type="number" class="form-control" id="" value="{{ $hero->luck }}" name="suerte">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Monedas</label>
    <input type="number" class="form-control" id="" value="{{ $hero->coins }}" name="monedas">
  </div>
  <button type="submit" class="btn btn-warning">Editar</button>
</form>
@endsection