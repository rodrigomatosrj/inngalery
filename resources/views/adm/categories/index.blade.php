@extends('layouts.app')
@section('content')

<a href="{{ route('categories.create') }}" class="btn btn-primary">Incluir nova categoria</a>


<table class="table table-striped">
    <tr>
        <thead>
            <td>Tipo</td>
            <td></td>
            <td></td>
        </thead>
    </tr>        
    @foreach ($categories as $category)
    <tr>
        <td>{{ $category->name}}</td>
        <td><a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary">Editar</a></td>
        <td><form method="POST" action = "{{route('categories.destroy', $category->id)}}"><input type="submit" value = "excluir" class="btn btn-danger">@csrf @method('DELETE')</form></td>
    </tr>
    @endforeach
  
</table>    

<a href="{{ route('adm.index')}}" class="btn btn-info">Voltar</a>

@endsection    