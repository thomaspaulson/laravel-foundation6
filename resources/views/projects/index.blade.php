@extends('layouts.app')

@section('content')
    <h2>List projects</h2>
    @foreach ($projects as $project)
    <h5>{{ $project->title }}</h5>
    <p>{{ $project->title }}</p>
    @endforeach
@endsection