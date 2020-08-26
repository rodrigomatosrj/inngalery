@extends('layouts.app')
@section('content')
    <form method="post" action="{{ route('themes.update', $theme->id) }}">
    @method('PUT')
    @include('adm.themes.form')

    </form>
@endsection    