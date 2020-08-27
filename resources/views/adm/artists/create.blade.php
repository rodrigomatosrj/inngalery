@extends('layouts.app')
@section('content')

    <form method="post" action="{{ route('artists.store') }}" enctype="multipart/form-data">

    @include('adm.artists.form')

    </form>
@endsection    