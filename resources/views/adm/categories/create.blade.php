@extends('layouts.app')
@section('content')

    <form method="post" action="{{ route('categories.store') }}">

    @include('adm.categories.form')

    </form>
@endsection    