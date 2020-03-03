@extends('layouts.app')

@section('title')
List projects
@endsection

@section('content')
    <h2>List projects</h2>
    <a href="/projects/create">Create project</a>
    @foreach ($projects as $project)
    <h5><a href="/projects/{{ $project->id }}">{{ $project->title }}</a></h5>
    <p>{{ $project->description }}</p>
    @endforeach
@endsection