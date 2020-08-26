@extends('layouts.app')
@section('content')

    <form method="post" action="{{ route('types.store') }}">

    @include('adm.types.form')

    </form>
@endsection    