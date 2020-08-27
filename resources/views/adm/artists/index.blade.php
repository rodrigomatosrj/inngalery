@extends('layouts.app')
@section('content')

<a href="{{ route('artists.create') }}" class="btn btn-primary">Incluir novo artista</a>


<table class="table table-striped">
    <tr>
        <thead>
            <td>Foto</td>
            <td>Nome</td>
            <td>Obras</td>
            <td>Detalhes</td>
        </thead>
    </tr>        
    @foreach ($artists as $artist)
    <tr>
        <td><img src="/ingallery/public/storage/{{ $artist->image ?? "/public/images/no-photo.png" }}" class="img-adm-artist"></td>
        <td>{{ $artist->name }}</td>
        <td>{{ $artist->total }}</td>
        <td><a href="{{ route('artists.show', $artist->id) }}" class="btn btn-primary">detalhes</a></td>
    </tr>
    @endforeach
  
</table>    

<a href="{{ route('adm.index')}}" class="btn btn-info">Voltar</a>

@endsection    