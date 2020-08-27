@extends('layouts.app')
@section('content')

<img src="/ingallery/public/storage/{{ $artist->image ?? "/public/images/no-photo.png" }}" class="img-adm-artist"></td>

{{ $artist->name }}


<a href="{{ route('artists.index') }}" class="btn btn-info">Voltar</a>

@endsection    