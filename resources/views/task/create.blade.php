@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>
            Create New Tasks
        </h1>
        <form method="POST" action="{{url('/task/store')}}">
            @csrf <!--Cross site requet forgery-->

            <label for="name">Name</label>
            <input type="text" name="name" id="">
            <br>
            <label for="description">Description</label>
            <textarea name="description" id="" cols="30" rows="10"></textarea>
            <br>
            <button type="submit">Create Task</button>
        </form>

        <a href="{{url('/task')}}">Back to Task</a>
    </div>
    @endsection
