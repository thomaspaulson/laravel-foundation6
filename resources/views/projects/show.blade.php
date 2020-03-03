@extends('layouts.app')

@section('content')
    <h2>View Project</h2>
    <h5>{{ $project->title }}</h5>
    <p>{{ $project->description }}</p>
    <a href="/projects/{{ $project->id }}/edit">Edit {{ $project->title }}</a>

    @if($project->tasks->count())
        @foreach ($project->tasks as $task)
        <div>
        <form action="/tasks/{{ $task->id }}" method="post">
        @method('PATCH')
        @csrf   
        <lable>
            <input type="checkbox" name="completed" onChange="this.form.submit()" {{ $task->completed ? 'checked':'' }}>
            {{ $task->description }}
        </label>        
        </form>
        <div>
        @endforeach
    @endif

    <form action="/projects/{{ $project->id }}/tasks" method="post">
        @csrf
        <div>
            <label>New Task</label>
            <input type="text" name="description" />
        </div>
        <div>
            <button type="submit" name="Create" class="button">Create</button>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif        
    </form>
@endsection

