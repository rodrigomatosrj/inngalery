@extends('layouts.app')
@section('content')

    <form method="post" action="{{ route('colours.store') }}">

    @include('adm.colours.form')

    </form>
@endsection    