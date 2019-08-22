@extends('layouts.master')

@section('css')
@endsection

@section('breadcrumb')
<div class="col-sm-6">
    <h4 class="page-title">Blank page</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Veltrix</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0);">Extra Pages</a></li>
        <li class="breadcrumb-item active">Blank page</li>
    </ol>

</div>

@endsection

@section('content')
<div class="row">
<div class="contatiner">


<div class="table-responsive">
    <div class="col-xs-6">
        <table id= "table1" class="table mb-0">
            <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                </tr>
            </thead>
            <tbody id="lista1">
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
                    <a href="" class="btn btn-warning">Editar</a>
                    <a href="" class="btn btn-primary">Borrar</a>
                    </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="col-xs-6">

    
    <table id="table2" class="table mb-0">

        <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                </tr>
        </thead>

        <tbody id="lista2">
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
                  <a href="" class="btn btn-warning">Editar</a>
                  <a href="" class="btn btn-primary">Borrar</a>
                  </td>
                </tr>
              @endforeach
        </tbody>

    </table>

</div>

</div>
</div>

    <div id="resultado">
        resultado
    </div>

</div>

@endsection

@section('script')
@endsection