@extends('layouts.main')
@section('container')    
    <h1>Halaman About</h1><hr>
    <h2 class="mt-3">Nama : {{ $name }}</h2>
    <h2>Email : {{ $email }}</h2>
    <h2>Hoby : {{ $hoby }}</h2>
    <img src="img/{{ $img }}" alt="{{ $name }}" width="400">
@endsection
