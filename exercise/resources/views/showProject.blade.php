@extends('layout.mainLayout')

@section('title', 'ProjectPage')

@section('content')
    <div class="mt-4 p-5 bg-primary text-white rounded">
        <h1> {{ $projects['title'] }} </h1>
        <p>Course: {{ $projects['course'] }} </p>
        <p>Code: {{ $projects['code'] }} </p>

        <br>
        <p><a href="/project" style="color: white">back</a></p>
    </div>
@endsection
