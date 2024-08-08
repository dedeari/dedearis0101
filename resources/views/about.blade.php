@extends('layouts.main')

@section('container')
    <H1>Halamn About</H1>
    <h3>{{ $name }}</h3>
    <P>{{ $email }}</P>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200px" class="img-thumbnail rounded-circle">
@endsection
