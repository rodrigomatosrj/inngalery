@extends('layouts.app')
@section('content')

<a href="{{ route('types.create') }}" class="btn btn-primary">Incluir novo tipo</a>


<table class="table table-striped">
    <tr>
        <thead>
            <td>Tipo</td>
            <td></td>
            <td></td>
        </thead>
    </tr>        
    @foreach ($types as $type)
    <tr>
        <td>{{ $type->name}}</td>
        <td><a href="{{ route('types.edit', $type->id) }}" class="btn btn-primary">Editar</a></td>
        <td><form method="POST" action = "{{route('types.destroy', $type->id)}}"><input type="submit" value = "excluir" class="btn btn-danger">@csrf @method('DELETE')</form></td>
    </tr>
    @endforeach
  
</table>    

<a href="{{ route('adm.index')}}" class="btn btn-info">Voltar</a>

@endsection    