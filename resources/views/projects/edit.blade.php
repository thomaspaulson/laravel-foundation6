@extends('layouts.app')

@section('content')
    <h2>Edit project</h2>
    <form action="/projects/{{ $project->id }}" method="post">
        @method('PATCH') 
        @csrf   

        <div>
            <label>Title
            <input type="text" placeholder="Title" name="title"  value="{{ $project->title }}"/>
            </label>
        </div>
        <div>
            <label>Description
            <input type="text" placeholder="Description" name="description"   value="{{ $project->description }}" />
            </label>
        </div>
        <div>
            <button type="submit" name="Create" class="button">Update</button>
        </div>

    </form>

    <form action="/projects/{{ $project->id }}" method="post">
        @method('DELETE') 
        @csrf   

        <div>
            <button type="submit" class="button">Delete</button>
        </div>

    </form>

@endsection