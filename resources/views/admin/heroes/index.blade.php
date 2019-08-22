

@section('content')
  <h1> Lista Heroes</h1>
  <a href="{{ route('admin.heroes.create') }}" class="btn btn-primary">Crear</a>
  <br><br>
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">HP</th>
      <th scope="col">Ataque</th>
      <th scope="col">Defensa</th>
      <th scope="col">Suerte</th>
      <th scope="col">Monedas</th>
      <th scope="col">Experiencia</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach( $heroes as $heroe )
      <tr>
        <th scope="row">{{ $heroe->id}}</th>
        <td>{{ $heroe->name }}</td>
        <td>{{ $heroe->hp }}</td>
        <td>{{ $heroe->attack }}</td>
        <td>{{ $heroe->defense }}</td>
        <td>{{ $heroe->luck }}</td>
        <td>{{ $heroe->coins}}</td>
        <td>{{ $heroe->xp}}</td>
        <td>
        <a href="{{ route('admin.heroes.edit' , [ 'id' => $heroe->id ]) }}" class="btn btn-warning">Editar</a>
        <a href="{{ route('admin.heroes') }}" class="btn btn-primary">Borrar</a>
        </td>
      </tr>
    @endforeach
   
  </tbody>
</table>


@endsection