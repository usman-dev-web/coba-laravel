@extends('layouts.main')

@section('container')
    <div class="container">
    <h1>Contact</h1>
    <h3>Telp : {{ $telp }} </h3>
    <h3>Email : {{ $email }}</h3>
    <h3>Alamat : {{ $alamat }}</h3>      
</div>
@endsection