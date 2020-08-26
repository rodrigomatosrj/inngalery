@extends('layouts.app')
@section('content')
    <form method="post" action="{{ route('types.update', $type->id) }}">
    @method('PUT')
    @include('adm.types.form')

    </form>
@endsection    