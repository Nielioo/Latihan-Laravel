@extends('layout.mainLayout')

@section('title', 'Contact with Layout')

@section('content')

    <h1>Contact</h1><br>
    <p>name: {{$name}}</p>
    <p>email: {{$email}}</p>
    <p>line: {{$line}}</p>


    <br>
    <a href="/">back</a>

@endsection

