@extends('layouts.app')
@section('content')
    <div>
        <h1>Edit Tasks</h1>

        <form method="POST" action="{{url("/task/{$task->id}")}}">
            @method('PUT')
            @csrf

            <label for="name">Name</label>
            <input type="text" name="name" id="" value="{{$task->name}}">
            <br>
            <label for="description">Description</label>
            <textarea name="description" id="" cols="30" rows="10">{{$task->description}}</textarea>
            <br>
            <button type="submit">Edit Task</button>
        </form>

        <a href="{{url('/task')}}">Back to Task</a>
    </div>
@endsection
