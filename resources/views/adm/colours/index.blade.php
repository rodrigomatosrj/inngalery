@extends('layouts.app')
@section('content')

<a href="{{ route('colours.create') }}" class="btn btn-primary">Incluir nova cor</a>


<table class="table table-striped">
    <tr>
        <thead>
            <td>Tipo</td>
            <td></td>
            <td></td>
        </thead>
    </tr>        
    @foreach ($colours as $colour)
    <tr>
        <td>{{ $colour->name}}</td>
        <td><a href="{{ route('colours.edit', $colour->id) }}" class="btn btn-primary">Editar</a></td>
        <td><form method="POST" action = "{{route('colours.destroy', $colour->id)}}"><input type="submit" value = "excluir" class="btn btn-danger">@csrf @method('DELETE')</form></td>
    </tr>
    @endforeach
  
</table>    

<a href="{{ route('adm.index')}}" class="btn btn-info">Voltar</a>

@endsection    