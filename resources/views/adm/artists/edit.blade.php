@extends('layouts.app')
@section('content')
    <form method="post" action="{{ route('categories.update', $category->id) }}">
    @method('PUT')
    @include('adm.categories.form')

    </form>
@endsection    