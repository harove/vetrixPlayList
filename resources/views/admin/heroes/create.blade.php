@extends('layouts.app')

@section('content')
<h1>Crear Heroe</h1>
<form action="{{ route('admin.heroes.store') }}" method="post">
  <div class="form-group">
    <label for="exampleFormControlInput1">Nombre</label>
    <input type="text" class="form-control" id="" name="nombre">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">HP</label>
    <input type="number" class="form-control" id="" name="hp">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Ataque</label>
    <input type="number" class="form-control" id="" name="ataque">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Defensa</label>
    <input type="number" class="form-control" id="" name="defensa">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Suerte</label>
    <input type="number" class="form-control" id="" name="suerte">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Monedas</label>
    <input type="number" class="form-control" id="" name="monedas">
  </div>
  <button type="submit" class="btn btn-primary">Crear</button>
</form>
@endsection