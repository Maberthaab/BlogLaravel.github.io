@extends('layouts.main')

@section ('container')
    <h1>About</h1>
    <h3>Website ini menggunakan bahasa pemrograman PHP dan Framework Laraval</h3>
    <h4>{{ $name }}</h4>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="logo" widht="500">


@endsection