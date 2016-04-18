@extends('layout')
@section('content')
    <h1>About Me: <?= $first_name ?> <?= $last_name ?></h1>
    <h1>About Me2: {{ $first_name }} {{ $last_name }}</h1>
@endsection