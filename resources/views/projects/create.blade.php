@extends('layouts.app')

@section('content')
    <h2>Create project</h2>
    <form action="/projects" method="post">
        @csrf

        <div>
            <label>Title
            <input type="text" placeholder="Title" name="title"  />
            </label>
        </div>
        <div>
            <label>Description
            <input type="text" placeholder="Description" name="description"  />
            </label>
        </div>
        <div>
            <button type="submit" name="Create" class="button">Create</button>
        </div>

    </form>
@endsection