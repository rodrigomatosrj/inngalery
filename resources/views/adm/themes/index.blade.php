@extends('layouts.app')
@section('content')

<a href="{{ route('themes.create') }}" class="btn btn-primary">Incluir novo tema</a>


<table class="table table-striped">
    <tr>
        <thead>
            <td>Tipo</td>
            <td></td>
            <td></td>
        </thead>
    </tr>        
    @foreach ($themes as $theme)
    <tr>
        <td>{{ $theme->name}}</td>
        <td><a href="{{ route('themes.edit', $theme->id) }}" class="btn btn-primary">Editar</a></td>
        <td><form method="POST" action = "{{route('themes.destroy', $theme->id)}}"><input type="submit" value = "excluir" class="btn btn-danger">@csrf @method('DELETE')</form></td>
    </tr>
    @endforeach
  
</table>    

<a href="{{ route('products.index')}}" class="btn btn-info">Voltar</a>

@endsection    