@extends('layouts.app')
@section('content')

    <form method="post" action="{{ route('themes.store') }}">

    @include('adm.themes.form')

    </form>
@endsection    