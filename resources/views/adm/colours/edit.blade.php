@extends('layouts.app')
@section('content')
    <form method="post" action="{{ route('colours.update', $colour->id) }}">
    @method('PUT')
    @include('adm.colours.form')

    </form>
@endsection    