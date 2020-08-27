@extends('layouts.app')
@section('content')

<nav class="nav flex-column">
    <a class="nav-link" href="{{ route('artists.index') }}">Artistas</a>
    <a class="nav-link" href="{{ route('products.index') }}">Produtos</a>
    <a class="nav-link" href="{{ route('categories.index') }}">Categorias</a>
    <a class="nav-link" href="{{ route('themes.index') }}">Temas</a>
    <a class="nav-link" href="{{ route('colours.index') }}">Cores</a>
    <a class="nav-link" href="{{ route('types.index') }}">Formatos</a>
</nav>


@endsection